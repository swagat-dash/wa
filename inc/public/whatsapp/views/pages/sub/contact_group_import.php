<style>
    .nav-tabs .nav-link {
  cursor: pointer;
}
</style>
<div class="modal fade wa-contact-group-import-modal" id="wa-contact-group-import-modal" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

        	<form class="actionForm" action="<?php _e( get_module_url( 'ajax_add_phone/'.segment(4) ) )?>" data-call-after="WhatsappJs.reload_contact_group();">
            <div class="modal-header">
                <h3 class="modal-title"><i class="ri-user-add-line"></i> <?php _e("Import contact")?></h3>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
					
            		<nav class="mt-3">
			            <div class="nav nav-tabs" id="nav-tab" role="tablist">
			                <div class="nav-item nav-link radio-tab active" data-toggle="tab" href="#nav_send_menssage"><?php _e("Import data from Excel File")?></div> 
			                <div class="nav-item nav-link radio-tab" data-toggle="tab" href="#nav_send_button"><?php _e("Import data from form")?></div>
			            </div>
			        </nav>

			        <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav_send_menssage" role="tabpanel">
                            <label for="phone_numbers">
    				    		<ul class="text-success small m-b-0">
    				    			<li><?php _e("You can download and try with a sample template. Only .xls and .xlsx are allowed.")?></li>
    				    		</ul>
    				    	</label>
                        	<a href="<?php _e( get_module_url("download_example_upload_csv") )?>" class="btn btn-secondary btn-block">
								<i class="fas fa-download"></i> <?php _e("Example template")?>
							</a>
                            <button type="button" class="btn btn-info btn-block fileinput-button">
								<i class="fas fa-upload"></i> <?php _e("Upload File")?>
								<input id="import_whatsapp_contact" type="file" name="files[]" multiple="">
							</button>
                        </div>
                        <div class="tab-pane fade" id="nav_send_button" role="tabpanel">
                            <label for="phone_numbers">
    				    		<ul class="text-success small m-b-0">
    				    			<li><?php _e("Every phone number must be all one with it's dial code. Each phone number is separated by break line")?></li>
    				    			<li><?php _e("E.g. (+84) 1234567890 must me 841234567890")?></li>
    				    			<li><?php _e("E.g. Group ID: 84123456789-1618177713@g.us")?></li>
    				    		</ul>
    				    	</label>
				    		<textarea class="form-control" name="phone_numbers" id="phone_numbers" rows="20" placeholder="<?php _e("Validate exapmle:")?>

841234567890
840123456789
+840123456798
84123456789-1618177713@g.us"></textarea>
			  				<button type="submit" class="btn btn-block btn-primary m-t-15"><?php _e('Submit')?></button>
                        </div>
                    </div>

			    	
            </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-dark" data-dismiss="modal"><?php _e('Close')?></button>
	        </div>
        </div>
		</form>
    </div>
</div>

<script type="text/javascript">
$(function(){
	WhatsappJs.import_contact('<?php _e( segment(4) )?>');
});

</script>