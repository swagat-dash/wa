<?php
//$allow_packages = json_decode(get_data($result, 'packages'));
$categories = array(__("catg_1"), __("catg_2"), __("catg_3"), __("catg_4")); ?>

<div class="subheadline wrap-m">
	<div class="sh-main wrap-c">
		<div class="sh-title text-info fs-18 fw-5"><i class="fas fa-plus"></i> <?php _e('New Ticket')?></div>
	</div>
	<div class="sh-toolbar wrap-c">
		<div class="btn-group" role="group">
	    	<a 
	    		class="btn btn-label-info actionItem" 
	    		data-result="html" 
	    		data-content="column-two"
	    		data-history="<?php _e( get_module_url() )?>" 
	    		data-call-after="Layout.inactive_subsidebar();" 
	    		href="<?php _e( get_module_url() )?>"
	    	>
	    		<i class="fas fa-chevron-left"></i> <?php _e('Back')?>
	    	</a>
		</div>
	</div>
</div>

<div class="m-t-10">
	<form class="actionForm actionTicketFrom" action="<?php _e( get_module_url( 'save/'.segment(4) ) )?>" data-redirect="<?php _e( get_module_url() )?>">
		<div class="row">
		<?php if(get_option('support_info', 1)){?>
			<div class="col-md-8">
		<?php } else { ?>
			<div class="col-md-12">
		<?php } ?>		
				<div class="card rounded">
					<div class="card-body rounded">
						  	<div class="form-group">
						    	<label for="position"><?php _e('Select category your want open ticket support')?></label>
						    	<select class="form-control" name="category">
						    		<option value=""><?php _e('Select category')?></option>
									<?php foreach ($categories as $value): ?>
										<option value="<?php _e($value)?>"><?php _e($value)?></option>
									<?php endforeach ?>
						    	</select>
						  	</div>

						  	<div class="newTicketForm">
						  		<div class="form-group">
							    	<label for="title"><?php _e('Subject')?></label>
							    	<input type="text" class="form-control" id="title" name="title" value="">
							  	</div>
							  	<div class="form-group">
							    	<label for="content"><?php _e('Message')?></label>
                                    <textarea class="form-control h-400" name="new_ticket" id="new_ticket" ></textarea>
                                </div>
							  	
							  	<button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> <?php _e('Submit')?></button>
						  	</div>
					</div>
				</div>
			</div>
			<?php if(get_option('support_info', 1)){?>
			<div class="col-md-4">
				<div class="card rounded">
					<div class="card-body">
						<div class="alert alert-outline-danger">
							<strong class="text-info"><?php _e('IMPORTANT:')?></strong> <?php _e('alert_ticket')?>
						</div>
						<h5 class="fs-16 fw-4 text-info m-b-20"><i class="fas fa-caret-right"></i> <?php _e('Time support:')?></h5>
						<ol class="p-l-25">
							<li class="m-b-5"><?php _e('ticket_note_1')?></li>
							<li class="m-b-5"><?php _e('ticket_note_2')?></li>
						</ol>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
    </form>
</div>

<script type="text/javascript">
$(function(){
  Core.CKEditor("new_ticket");
});
</script>