<div class="modal fade wa-contact-group-import-modal" id="wa-contact-group-import-modal" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title"><i class="ri-contacts-book-fill"></i> <?php _e("Contacts")?></h3>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
            	<form>
	            	<div class="p-l-20 p-t-10">
	            		<div class="row">
	            			<div class="col-6">
		            			<label class="i-checkbox i-checkbox--tick i-checkbox--brand position-relative t-7">
									<input type="checkbox" class="check-all">
									<span></span>
									<b><?php _e("Check All")?></b>
								</label>
		            		</div>
		            		<div class="col-6">
		            			<a class="btn btn-label-danger btn-sm float-right m-r-20 position-relative m-b-10 actionMultiItem" href="<?php _e( get_module_url('delete_phone/'.segment(4)) )?>" data-confirm="<?php _e('Are you sure to delete this items?')?>" data-call-after="WhatsappJs.phone_numbers();"><i class="far fa-trash-alt"></i></a>
		            		</div>
	            		</div>
	            	</div>
	            	<ul class="wa-contact-group-import-items ajax-load-log list-group list-group-flush wa-scroll" data-id="<?php _e( segment(4) )?>" data-page="0" data-load-type="scroll" data-scroll=".wa-contact-group-import-items">
	            		<div class="fa-2x m-auto p-40">
						  <i class="fas fa-spinner fa-spin text-info"></i>
						</div>
					</ul>
				</form>
            </div>

        </div>
    </div>
</div>