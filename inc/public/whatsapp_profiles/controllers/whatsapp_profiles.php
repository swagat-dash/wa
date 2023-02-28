<?php

class whatsapp_profiles extends MY_Controller {

    public $tb_team = 'sp_team';
    public $tb_whatsapp_autoresponder = "sp_whatsapp_autoresponder";
	public $tb_whatsapp_chatbot = "sp_whatsapp_chatbot";
    public $tb_account_manager = "sp_account_manager";
	public $tb_whatsapp_sessions = "sp_whatsapp_sessions";
	public $module_name;

	public function __construct(){
		parent::__construct();
        _permission("account_manager_enable");
		$this->load->model(get_class($this).'_model', 'model');

		//
		$this->module_name = get_module_config( $this, 'name' );
		$this->module_icon = get_module_config( $this, 'icon' );
		$this->module_color = get_module_config( $this, 'color' );
		//
	}

	public function index($page = "", $ids = "")
	{
        $team_id = _t("id");
        $instance_id = addslashes(post("instance_id"));
        //_validate_user_data();
        $account = $this->model->get("*", $this->tb_account_manager, "social_network = 'whatsapp' AND category = 'profile' AND token = '{$instance_id}' AND team_id = '".$team_id."'");
        $accounts = $this->model->fetch("*", $this->tb_account_manager, "social_network = 'whatsapp' AND category = 'profile' AND team_id = '".$team_id."'");

        if(empty($account)){
            if(count($accounts) < _p("number_accounts")){
                $instance_id = strtoupper(uniqid());
                $whatsapp_session = $this->model->delete($this->tb_whatsapp_sessions, "status = 0 AND team_id = '{$team_id}'");
                $this->db->insert( $this->tb_whatsapp_sessions, [
                    "ids" => ids(),
                    "instance_id" => $instance_id,
                    "team_id" => $team_id,
                    "data" => NULL,
                    "status" => 0
                ] );
                $data['instance_id'] = $instance_id;
            }else{
                $data['instance_id'] = "";
                $data['error'] = sprintf( __("You can only add up to %s Whatsapp accounts"), _p("number_accounts") );
            }
        }else{
            $this->db->update($this->tb_whatsapp_sessions, [ 'status' => 0], [ 'instance_id' => $account->token ]);
            $data['instance_id'] = $instance_id;
        }

        $data['module_name'] = $this->module_name;
        $data['module_icon'] = $this->module_icon;
        $data['module_color'] = $this->module_color;
        $data['accounts'] = $accounts;

		$views = [
			"subheader" => view( 'main/subheader', [ 'module_name' => $this->module_name, 'module_icon' => $this->module_icon, 'module_color' => $this->module_color ], true ),
			"column_one" => page($this, "pages", "oauth", $page, $data), 
		];
		
		views( [
			"title" => $this->module_name,
			"fragment" => "fragment_one",
			"views" => $views
		] );
	}

    public function get_qrcode(){
        
        $tid = _t("id");
        $team_id = _s("team_id");
        $instance_id = addslashes(post("instance_id"));
        $server_url = get_option('whatsapp_server_url', '');

        $account = $this->model->get("*", $this->tb_account_manager, "social_network = 'whatsapp' AND category = 'profile' AND token = '{$instance_id}' AND team_id = '".$tid."' AND status = 0");
        
        if($account){
            $session = $this->model->get("*", $this->tb_whatsapp_sessions, "team_id = '".$tid."' AND status = 0");
            if($session){
                if($session->instance_id != $instance_id){
                    $this->db->update( $this->tb_whatsapp_sessions, [
                        "instance_id" => $instance_id,
                        "status" => 0
                    ], [ 'id' => $session->id ] );
                }
            }else{
                $this->db->insert( $this->tb_whatsapp_sessions, [
                    "ids" => ids(),
                    "instance_id" => $instance_id,
                    "team_id" => $tid,
                    "data" => NULL,
                    "status" => 0
                ] );
            }
        }

        $result = get_curl( $server_url."get_qrcode?instance_id=".$instance_id."&access_token=".$team_id );
        $check = json_decode($result);
        if( $check->status == "error" ){
            ms([
                "status" => "error",
                "message" => __( $check->message )
            ]);
        }else{
            header("Content-type: image/png");
            echo base64_decode( str_replace("data:image/png;base64,", "", $check->base64) );
        }

    }

    public function check_login($instance_id){
        $team_id = _t("id");
        $whatsapp_session = $this->model->get("*", $this->tb_whatsapp_sessions, "status = 1 AND team_id = '{$team_id}' AND instance_id = '{$instance_id}'");

        if($whatsapp_session){
            $profile = json_decode($whatsapp_session->data);
            $account = $this->model->get("*", $this->tb_account_manager, "token = '{$instance_id}' AND team_id = '{$team_id}'");
            if(!$account){
                $account = $this->model->get("*", $this->tb_account_manager, "pid = '{$profile->jid}' AND team_id = '{$team_id}'");
            }

            $avatar = save_img( $account->avatar, TMP_PATH.'avatar/' );

            if($account){
                $data = [
                    'avatar' => $avatar
                ];
                $this->model->update($this->tb_account_manager, $data, ['id' => $account->id]);
            }

            ms([
                "status" => "success",
                "message" => __("Success")
            ]);
        }

        ms([
            "status" => "error",
            "message" => __("Unsuccess")
        ]);
    }

    public function oauth()
    {
        redirect(  get_module_url() );   
    }

    public function cron_bk(){
        $server_url = get_option('whatsapp_server_url', '');
        $response = $this->model->fetch("*", $this->tb_account_manager, "social_network = 'whatsapp' AND login_type = '2' AND status = 1", "changed", "ASC", 0, 4);
        if(!empty($response)){
            foreach ($response as $key => $value) {
                $team = $this->model->get("ids", $this->tb_team, "id = '{$value->team_id}'");
                $result = json_decode( wa_get_curl( $server_url."check_instance?instance_id=".$value->token."&access_token=".$team->ids ) );
                $this->db->update($this->tb_account_manager, ["changed" => NOW], ["id" => $value->id]);
            }
        }

        echo "Successed";
    }
}