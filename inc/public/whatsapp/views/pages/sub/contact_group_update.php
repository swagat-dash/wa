<div class="modal fade wa-contact-group-import-modal" id="wa-contact-group-import-modal" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

        	<form class="actionForm" action="<?php _e( get_module_url( 'save_contact_group/'.segment(4) ) )?>" data-call-after="WhatsappJs.reload_contact_group();">
	            <div class="modal-header">
	                <h3 class="modal-title"><i class="ri-edit-box-line"></i> <?php _e("Update")?></h3>
	                <button type="button" class="close" data-dismiss="modal"
	                    aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
		
					<div class="form-group">
				    	<label for="status"><?php _e('Status')?></label>
				    	<div>
				    		<label class="i-radio i-radio--tick i-radio--brand m-r-10">
								<input type="radio" name="status" checked="true" value="1" <?php _e( get_data($result, 'status', 'radio', 1) )?> > <?php _e('Enable')?>
								<span></span>
							</label>
							<label class="i-radio i-radio--tick i-radio--brand m-r-10">
								<input type="radio" name="status" value="0" <?php _e( get_data($result, 'status', 'radio', 0) )?> > <?php _e('Disable')?>
								<span></span>
							</label>
				    	</div>
				  	</div>
				  	<div class="form-group m-b-0">
				    	<label for="name"><?php _e('Group contact name')?></label>
				    	<input type="text" class="form-control" id="name" name="name" value="<?php _e( get_data($result, 'name') )?>">
				  	</div>

	            </div>
	            <div class="modal-footer">
		        	<button type="button" class="btn btn-dark" data-dismiss="modal"><?php _e('Close')?></button>
				  	<button type="submit" class="btn btn-primary"><?php _e('Submit')?></button>
		        </div>

			</form>
        </div>
    </div>
</div>