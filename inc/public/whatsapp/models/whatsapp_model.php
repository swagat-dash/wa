<?php
class whatsapp_model extends MY_Model {

	public $tb_account_manager = "sp_account_manager";
	public $tb_whatsapp_schedules = "sp_whatsapp_schedules";
	public $tb_whatsapp_autoresponder = "sp_whatsapp_autoresponder";
	public $tb_whatsapp_contacts = "sp_whatsapp_contacts";
	public $tb_whatsapp_phone_numbers = "sp_whatsapp_phone_numbers";

	public function __construct(){
		parent::__construct();
		$module_path = get_module_directory(__DIR__);

		//
		$this->module_id = get_module_config( $module_path, 'id' );
		$this->module_name = get_module_config( $module_path, 'name' );
		$this->module_icon = get_module_config( $module_path, 'icon' );
		$this->module_color = get_module_config( $module_path, 'color' );
		//
	}

	public function block_permissions($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 1000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view( $dir.'pages/block_permissions', ['path' => $path], true, $this ),
		];
	}

	public function block_social_settings($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'whatsapp' => [
				'position' => 1000,
				'name' => __('Whatsapp'),
				'desc' => __('Whatsapp API Configuration'),
				'color' => $this->module_color,
				'icon' => $this->module_icon, 
				'content' => view( $dir.'settings/configuration', ['path' => $path], true, $this ),
			]
		];
	}

	public function block_bkcronjobs($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 1000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'cronjobs' => [
				[
					"name" => $this->module_name,
					"time" => __("Once/minute"),
					"command_line" => "curl ". get_url( str_replace("_model", "", get_class($this) )."/cron?key=" . get_option("cron_key", uniqid() ) ) ." >/dev/null 2>&1"
				]
			]
		];
	}

	public function block_report($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'tab' => 'whatsapp',
			'position' => 1000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view( $dir.'pages/block_report', ['path' => $path], true, $this ),
		];
	}

	public function get_phone_numbers($account, $page = 0){
		$team_id = _t("id");

		$this->db->select("*");
		$this->db->from($this->tb_whatsapp_phone_numbers);

		$this->db->where("pid", $account);
		$this->db->where("team_id", $team_id);
		$this->db->order_by("id", "desc");
		$this->db->limit(100, (int)$page*100);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	public function get_contact_groups1($team_id = ''){
		$result = $this->model->fetch("*", $this->tb_whatsapp_contacts, "team_id = '{$team_id}' AND name NOT LIKE '%child%'");
		foreach ($result as $key => $value) {
			$result[$key]->count = $this->model->get("count(id) as count", $this->tb_whatsapp_phone_numbers, "team_id = '{$team_id}' AND pid = '{$value->id}'")->count;
		}

		return $result;
	}

	public function get_bulk_schedules()
	{
		$page   = (int)post("p");
		$limit  = 30;
		$result = $this->get_bulk_schedules_list($limit, $page);
		$total  = $this->get_bulk_schedules_list(-1, -1);

		$configs = [
			"base_url"   => get_module_url("/get/contact_schedules"), 
			"total_rows" => $total, 
			"per_page"   => $limit
		];

		$this->pagination->initialize($configs);

		$data = [
			"result"     => $result,
			"total"      => $total,
			"page"       => $page,
			"limit"      => $limit,
			"pagination" => $this->pagination->create_links()
		];

		return $data;
	}

	public function get_bulk_schedules_list($limit=-1, $page=-1)
	{
		$team_id = _t("id");
		$c = (int)post('c');
		$t = post('t'); 
		$k = post('k');
		
		if($limit == -1)
		{
			$this->db->select('count(a.id) as sum');
			$this->db->from($this->tb_whatsapp_schedules." as a");
			$this->db->join($this->tb_whatsapp_contacts." as b", "a.contact_group_id = b.id", "LEFT");
			$this->db->join($this->tb_account_manager." as d", "d.id = a.account_id", "LEFT");
		}
		else
		{
			$this->db->select('a.*, b.name as group, d.name as account_name, d.username as account_username, d.token');
			$this->db->from($this->tb_whatsapp_schedules." as a");
			$this->db->join($this->tb_whatsapp_contacts." as b", "a.contact_group_id = b.id", "LEFT");
			$this->db->join($this->tb_account_manager." as d", "a.account_id = d.id", "LEFT");
			$this->db->limit($limit, $page);
		}
		
		$instance_id = addslashes(post("instance_id"));

		$this->db->where("a.team_id = '{$team_id}'");
		$this->db->where("b.team_id = '{$team_id}'");
		$this->db->where("d.team_id = '{$team_id}'");
		$this->db->where("d.token = '{$instance_id}'");

		if($k)
		{
			$i = 1;
			foreach ($this->fields as $field)
			{
				if($i == 1)
				{
					$this->db->like($field, $k);
				}
				else
				{
					$this->db->or_like($field, $k);
				}
				$i++;
			}
		}

		if($c){
			$i = 1;
			$s = ( $t && ( $t == "asc" || $t == "desc") )? $t : "desc";
			foreach ($this->fields as $field)
			{
				if($i == $c)
				{
					$this->db->order_by($field, $s);
				}
				$i++;
			}
		}
		else
		{
			$this->db->order_by('a.created', 'desc');
		}

		$query = $this->db->get();

		if($query->result())
		{
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{

				$result = $query->result();

				if(!empty($result)){

					foreach ($result as $key => $value) {
					    
					    if($value->status==4){
					        $count_res = $this->db->query("
SELECT sum(b.sent) as sent, sum(b.failed) as failed, count(a.id) as rphones, t.name as TemplateName
FROM `sp_whatsapp_schedules` a
	left join `sp_whatsapp_schedules` b on b.parent= a.id 
	left join `sp_whatsapp_template` t on t.id = a.template
WHERE a.status = 4 AND a.id=".$value->id ."
group by a.id");
                            
                            $result[$key]->count_sent=  $count_res->result_array();
					        
					    }else{
					        $count_res = $this->db->query("
SELECT sum(b.sent) as sent, sum(b.failed) as failed, count(a.id) as rphones, t.name as TemplateName
FROM `sp_whatsapp_schedules` a
	left join `sp_whatsapp_schedules` b on b.parent= a.id 
	left join `sp_whatsapp_template` t on t.id = a.template
WHERE a.id=".$value->id ."
group by a.id");
                            
                            $result[$key]->count_sent=  $count_res->result_array();
					    }
					    
						$count_phone = $this->model->get("count(*) as count", $this->tb_whatsapp_phone_numbers, "pid = '{$value->contact_group_id}'")->count;
						$result[$key]->total_phone_number = $count_phone;
						
					}

					return $result;

				}
			}
		}

		return false;
	}

	public function get_contact_groups()
	{
		$page   = (int)post("p");
		$limit  = 30;
		$result = $this->get_contact_groups_list($limit, $page);
		$total  = $this->get_contact_groups_list(-1, -1);

		$configs = [
			"base_url"   => get_module_url("/get/contact_group"), 
			"total_rows" => $total, 
			"per_page"   => $limit
		];

		$this->pagination->initialize($configs);

		$data = [
			"result"     => $result,
			"total"      => $total,
			"page"       => $page,
			"limit"      => $limit,
			"pagination" => $this->pagination->create_links()
		];

		return $data;
	}

	public function get_contact_groups_list($limit=-1, $page=-1)
	{
		$team_id = _t("id");
		$c = (int)post('c');
		$t = post('t'); 
		$k = post('k');
		
		if($limit == -1)
		{
			$this->db->select('count(*) as sum');
			$this->db->from($this->tb_whatsapp_contacts);
		}
		else
		{
			$this->db->select('*');
			$this->db->from($this->tb_whatsapp_contacts);
			$this->db->limit($limit, $page);
		}

		$this->db->where("team_id = '{$team_id}' AND name NOT LIKE '%child%'");

		if($k)
		{
			$i = 1;
			foreach ($this->fields as $field)
			{
				if($i == 1)
				{
					$this->db->like($field, $k);
				}
				else
				{
					$this->db->or_like($field, $k);
				}
				$i++;
			}
		}

		if($c){
			$i = 1;
			$s = ( $t && ( $t == "asc" || $t == "desc") )? $t : "desc";
			foreach ($this->fields as $field)
			{
				if($i == $c)
				{
					$this->db->order_by($field, $s);
				}
				$i++;
			}
		}
		else
		{
			$this->db->order_by('created', 'desc');
		}

		$query = $this->db->get();

		if($query->result())
		{
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{

				$result = $query->result();

				if(!empty($result)){

					foreach ($result as $key => $value) {
						$result[$key]->count = $this->model->get("count(id) as count", $this->tb_whatsapp_phone_numbers, "team_id = '{$team_id}' AND pid = '{$value->id}'")->count;
					}

					return $result;

				}
			}
		}

		return false;
	}

	public function get_bulk_posts(  ){

		$this->db->select("
			a.*,
			b.category,
			b.login_type,
			b.name,
			b.username,
			b.token,
			b.avatar,
			b.url,
			b.data as account_data,
			b.ids as account_ids,
		");

		$this->db->from($this->tb_whatsapp_schedules." as a");
		$this->db->join($this->tb_account_manager." as b", "a.account_id = b.id");
		$this->db->where(" a.status = 1 ");
		$this->db->where(" a.time_post <= '".time()."'");
		$this->db->order_by(" a.time_post ", " ASC ");
		$this->db->limit(5, 0);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
}
