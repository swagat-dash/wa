<div class="subheader-main"> 
	<button class="btn btn-label-info m-r-10 subheader-toggle"><i class="fas fa-bars"></i></button>
	<h3 class="title"><i class="text-info <?php _e( $module_icon )?>"></i> <?php _e( $module_name )?></h3>
</div>	

<div class="subheader-toolbar">
	<div class="btn-group" role="group">
	<?php if(get_option('support_faqs', 1)){?>
		<a 
			class="btn btn-label-success"
			href="<?php _e( get_module_url('faqs') )?>"
		><i class="fas fa-book"></i> <?php _e('FAQs')?></a>
	<?php } ?>
		<a 
			class="actionItem btn btn-label-info"
			data-result="html" 
			data-content="column-two" 
			href="<?php _e( get_module_url('index/new') )?>"
			data-history="<?php _e( get_module_url('index/new') )?>"
		><i class="fas fa-pencil-alt"></i> <?php _e('New Ticket')?></a>
	</div>
</div>