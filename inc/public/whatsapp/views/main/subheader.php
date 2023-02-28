<script type="text/javascript">
	var WHATSAPP_SERVER_API  = '<?php _e( get_option('whatsapp_server_url', '') )?>';
</script>

<div class="subheader-main w-150 p-r-0 d-ms-none"> 
	<h3 class="title w-100 p-r-0"><i class="text-success <?php _e( $module_icon )?>"></i> <?php _e( $module_name )?></h3>
</div>	

<div class="float-left fs-12 m-t-5 wa-info d-none">
	<div class="media">
	  	<img class="align-self-center mr-2 w-35 avatar rounded-circle" src="<?php _e( get_avatar("SP") )?>">
	  	<div class="media-body">
		  	<div class="name fw-6"></div>
		  	
		    <div class="detail">
				<span><i class="ri-router-line text-warning"></i> <?php _e("State:")?></span> <span class="state text-success fw-6"><?php _e("CONNECTED")?></span><span class="m-r-10"></span>
			</div>
	  	</div>
	</div>
</div>