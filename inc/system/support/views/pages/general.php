<div class="wrap-m h-100">
	<div class="empty" style="width: 300px !important;">
		<div class="icon"></div>
		<div class="btn-group" role="group">
		<?php if(get_option('support_faqs', 1)){?>
			<a 
				class="btn btn-success"
				href="<?php _e( get_module_url('faqs') )?>"
			><i class="fas fa-book"></i> <?php _e('FAQs')?></a>
		<?php } ?>
			<a 
				class="actionItem btn btn-info"
				data-result="html" 
				data-content="column-two" 
				href="<?php _e( get_module_url('index/new') )?>"
				data-history="<?php _e( get_module_url('index/new') )?>"
				data-call-after="Core.CKEditor();"
			><i class="fas fa-pencil-alt"></i> <?php _e('New Ticket')?></a>
		</div>
	</div>
</div>