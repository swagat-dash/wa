<?php
class whatsapp_profiles_model extends MY_Model {
	public $tb_account_manager = "sp_account_manager";

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

	public function block_accounts($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		$team_id = _t('id');
		$result = $this->main_model->fetch('*', $this->tb_account_manager, "social_network = 'whatsapp' AND category = 'profile' AND team_id = '".$team_id."'");
		return [
			'position' => 400,
			'id' => $this->module_id,
			'name' => $this->module_name,
			'button' => Modules::run("account_manager/block_add", [
				"module_name" => $this->module_name,
				"module_icon" => $this->module_icon,
				"module_color" => $this->module_color,
				"module_id" => $this->module_id,
				"text" => __("Add Whatsapp profile"),
				"url" => get_url($this->module_id."/oauth")
			]),
			'accounts' => Modules::run("account_manager/block_accounts", [
				"module_name" => $this->module_name,
				"module_icon" => $this->module_icon,
				"module_color" => $this->module_color,
				"module_id" => $this->module_id,
				"result" => $result
			]),
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
}