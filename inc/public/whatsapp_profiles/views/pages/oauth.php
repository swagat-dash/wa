<div class="widget-box-add-account">
	<?php if(!isset($error)){?>
		<div class="list-group-item active bg-info text-uppercase"><i class="far fa-question-circle"></i> <?php _e("To start using tool you need to connect your phone number.")?></div><br>
	<div class="headline m-b-30">
		<div class="title fs-18 fw-5 text-info"><i class="far fa-plus-square"></i> <?php _e( sprintf('Instance ID: %s', $instance_id) )?></div> 
		
		<div class="desc"><?php _e("Scan the QR Code on your Whatsapp app")?></div>
	</div>
	<?php }?>

	<?php if(isset($error)){?>
		<div class="alert alert-solid-danger m-b-30"><i class="fas fa-exclamation-circle"></i> <?php _e( $error )?></div>

		<?php if(!empty($accounts)){
			$count = 0;
			foreach ($accounts as $account) {
				if($account->status == 0){
					$count++;
		?>
		
		<?php if($count == 1){?>
			<div class="border-bottom p-t-8 p-b-8 m-b-30 text-uppercase fw-6 fs-16 text-info"><i class="fas fa-sync"></i> <?php _e("Relogin required")?></div>
		<?php }?>

		<div class="card mb-3">
	  		<div class="d-flex position-relative">
			  	<img src="<?php _e(  get_img_url($account->avatar) )?>" class="flex-shrink-0 me-3 w-95 h-95">
			  	<div class="p-20">
				    <div class="mt-0"><?php _e( $account->name )?> (<?php _e( "+".$account->username )?>)</div>
			    	<a href="<?php _e( get_module_url("?instance_id=".$account->token) )?>" class="stretched-link btn-sm btn btn-danger p-l-10 p-r-10 p-t-2 p-b-2 fs-10 text-uppercase"><?php _e("Relogin")?></a>
			  	</div>
			</div>
		</div>
		<?php }}}?>
	<?php }else{?>
	
	<div class="text-center wa-qr-code">
		<div class="wa-reload">
			<a href="<?php _e( get_module_url("whatsapp_profiles") )?>"><i class="fas fa-sync text-info"></i></a>
		</div>
		<div class="wa-code"><img src="<?php _e( get_module_url("get_qrcode?instance_id=".$instance_id) )?>"></div>
	</div>
	
	<?php if(!empty($accounts)){
			$count = 0;
			foreach ($accounts as $account) {
					$count++;
		?>
		
		<?php if($count == 1){?>
			<div class="border-bottom p-t-20 p-b-8 m-b-30 text-uppercase fw-6 fs-16 text-info"><i class="fas fa-sync"></i> <?php _e("Relogin to keep old instance id")?></div>
		<?php }?>
		
		
        <?php if($account->status == "0"): ?>
		<div class="card mb-3">
	  		<div class="d-flex position-relative">
			  	<img src="<?php _e(  get_img_url($account->avatar) )?>" class="flex-shrink-0 me-3 w-95 h-95">
			  	<div class="p-20">
				    <div class="mt-0"><?php _e( $account->name )?> (<?php _e( "+".$account->username )?>)</div>
			    	<a href="<?php _e( get_module_url("?instance_id=".$account->token) )?>" class="stretched-link btn-sm btn btn-danger p-l-10 p-r-10 p-t-2 p-b-2 fs-10 text-uppercase"><?php _e("Relogin")?></a>
			  	</div>
			</div>
		</div>
		<?php endif ?>
		<?php }}?>

	<ul class="list-group m-t-25">
	
		
		<li class="list-group-item"><?php _e("Step 1: Open WhatsApp on your phone") ?></li>
		<li class="list-group-item"><?php _e("Step 2: Tap Menu or Settings and select WhatsApp Web") ?></li>
		<li class="list-group-item"><?php _e("Step 3: Point your phone at this screen and capture the code above") ?></li>
		<li class="list-group-item text-danger">
			<video width="100%" height="320" autoplay muted loop>
			  <source src="<?php _e( get_module_path($this, "assets/img/scan.mp4") )?>" type="video/mp4">
			</video>
		</li>
	</ul>
	<script type="text/javascript">
		var INSTANCE_ID = '<?php _e( $instance_id )?>';
	</script>
	<?php }?>

</div>

