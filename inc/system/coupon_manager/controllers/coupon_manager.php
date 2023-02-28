<?php

class coupon_manager extends MY_Controller {
	
	public $tb_coupon_manager = "sp_coupon_manager";
	public $tb_package_manager = "sp_package_manager";
	public $module_name;

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');

		//
		$this->module_name = get_module_config( $this, 'name' );
		$this->module_icon = get_module_config( $this, 'icon' );
		//
	}

	public function index($page = "", $ids = "")
	{
		_permission(get_class($this)."_enable");
		$result = $this->model->fetch("*", $this->tb_coupon_manager);
		$page_type = is_ajax()?false:true;

		//
		$data = [];
		switch ($page) {
			case 'update':
				$item = $this->model->get("*", $this->tb_coupon_manager, "ids = '{$ids}'");
				$packages = $this->model->fetch("*", $this->tb_package_manager);
				$data['result'] = $item;
				$data['packages'] = $packages;
				break;
		}

		$page = page($this, "pages", "general", $page, $data, $page_type);
		//

		if( !is_ajax() ){

			$views = [
				"subheader" => view( 'main/subheader', [ 'result' => $result, 'module_name' => $this->module_name, 'module_icon' => $this->module_icon ], true ),
				"column_one" => view("main/sidebar", [ 'result' => $result, 'module_name' => $this->module_name, 'module_icon' => $this->module_icon ], true ),
				"column_two" => view("main/content", [ 'view' => $page ] ,true), 
			];
			
			views( [
				"title" => $this->module_name,
				"fragment" => "fragment_two",
				"views" => $views
			] );

		}else{
			_e( $page, false );
		}

	}

	public function ajax_remove(){
		_us("coupon");
		ms([
			"status" => "success",
			"message" => __("Success")
		]);
	}

	public function ajax_verify(){
		$code = post("code");
		$package = post("package");

		if($code == ""){
			ms([
				"status" => "error",
				"message" => __("Please enter coupon code")
			]);
		}

		$package = $this->model->get("*", $this->tb_package_manager, "id = '{$package}'");
		if(empty($package)){
			ms([
				"status" => "error",
				"message" => __("Package does not exist")
			]);
		}

		$coupon = $this->model->get("*", $this->tb_coupon_manager, "code = '{$code}'");
		if(empty($coupon)){
			ms([
				"status" => "error",
				"message" => __("Coupon code is not valid")
			]);
		}

		$expiration_date = strtotime($coupon->expiration_date);
		$now = strtotime(NOW);
		if($expiration_date < $now){
			ms([
				"status" => "error",
				"message" => __("Coupon code has expired")
			]);
		}

		$coupon_package = json_decode($coupon->packages);
		if(!in_array($package->id, $coupon_package)){
			ms([
				"status" => "error",
				"message" => __("Coupon code does not apply to this package")
			]);
		}

		_ss("coupon", [
			"code" => $coupon->code,
			"type" => $coupon->type,
			"price" => $coupon->price,
			"package" => $coupon_package,
		]);

		ms([
			"status" => "success",
			"message" => __("Success")
		]);
		
	}

	public function save($ids = "")
	{
		_permission(get_class($this)."_enable");
		$name = post('name');
		$code = post('code');
		$type = post('type');
		$price = post('price');
		$expiration_date = datetime_sql(post('expiration_date'));
		$packages = post('packages');
		$status = post('status');

		$item = $this->model->get("*", $this->tb_coupon_manager, "ids = '{$ids}'");
		if(!$item){
			$item = $this->model->get("*", $this->tb_coupon_manager, "code = '{$code}'");
			validate('null', __('Type'), $type);
			validate('empty', __('Please select packages'), $packages);
			validate('null', __('Name'), $name);
			validate('null', __('Code'), $code);
			validate('not_empty', __('This coupon already exists'), $item);
			validate('null', __('Price'), $price);
			validate('null', __('Expiration date'), $expiration_date);

			$this->model->insert($this->tb_coupon_manager , [
				"ids" => ids(),
				"name" => $name,
				"code" => $code,
				"type" =>  $type,
				"price" => $price,
				"expiration_date" => $expiration_date,
				"packages" => json_encode($packages),
				"status" => $status,
				"changed" => now(),
				"created" => now()
			]);
		}else{
			$item = $this->model->get("*", $this->tb_coupon_manager, "ids != '{$ids}' AND code = '{$code}'");
			validate('null', __('Type'), $type);
			validate('empty', __('Please select packages'), $packages);
			validate('null', __('Name'), $name);
			validate('null', __('Code'), $code);
			validate('not_empty', __('This coupon already exists'), $item);
			validate('null', __('Price'), $price);
			validate('null', __('Expiration date'), $expiration_date);

			$this->model->update(
				$this->tb_coupon_manager, 
				[
					"name" => $name,
					"code" => $code,
					"type" =>  $type,
					"price" => $price,
					"expiration_date" => $expiration_date,
					"packages" => json_encode($packages),
					"status" => $status,
					"created" => now()
				], 
				array("ids" => $ids)
			);
		}

		ms([
			"status" => "success",
			"message" => __('Success')
		]);

	}

	public function delete(){
		_permission(get_class($this)."_enable");
		$ids = post('id');

		if( empty($ids) ){
			ms([
				"status" => "error",
				"message" => __('Please select an item to delete')
			]);
		}

		if( is_array($ids) ){
			foreach ($ids as $id) {
				$this->model->delete($this->tb_coupon_manager, ['ids' => $id]);
			}
		}
		elseif( is_string($ids) )
		{
			$this->model->delete($this->tb_coupon_manager, ['ids' => $ids]);
		}

		ms([
			"status" => "success",
			"message" => __('Success')
		]);
	}
}
?>