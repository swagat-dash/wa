<div class="container p-25">
		<?php if ( !empty($result['result']) ) {?>
		<div class="row">
			<div class="col-md-12 m-b-15">
				<a href="javascript:void(0);" class="btn btn-sm btn-info d-inline-block d-lg-none mr-2 wa-back-submenu" data-result="html"><i class="ri-arrow-left-s-line"></i> <?php _e("Back")?></a>
				<a href="<?php _e( get_module_url("get/contact_group_update/") )?>" class="action-contact-group-import btn btn-sm btn-info float-right" data-result="html"><i class="ri-contacts-book-line"></i> <?php _e("Add new")?></a>
				
			</div>
            <?php foreach ($result['result'] as $key => $value): ?>
            <div class="col-sm-4 col-md-4 item-contact-group">
				<div class="card mb-4 box-shadow">
					<div class="card-body">
						<div class="d-flex justify-content-center m-b-15">
							<div class="fs-40 rounded-circle bg-success w-50 h-50"><i class="ri-contacts-book-fill"></i></div>
						</div>
						<p class="card-text">
							<h5 class="fs-14 text-center"><?php _e( $value->name )?></h5>
							<div class="text-muted text-center fs-12"><?php _e(  sprintf( __('%d contacts'), $value->count) )?></div>
						</p>
						<div class="d-flex justify-content-center align-items-center text-center">
							<div class="btn-group">
								<a href="<?php _e( get_module_url("get/contact_group_list/".$value->ids) )?>" class="action-contact-group-import btn btn-sm btn-label-info" title="<?php _e("Contact")?>" data-placement="bottom" data-toggle="tooltip" data-result="html"><i class="ri-contacts-book-line"></i></a>
								<a href="<?php _e( get_module_url("get/contact_group_import/".$value->ids) )?>" class="action-contact-group-import btn btn-sm btn-label-info" title="<?php _e("Import contact")?>" data-placement="bottom" data-toggle="tooltip" data-result="html"><i class="ri-user-add-line" ></i></a>
								<a href="<?php _e( get_module_url("get/contact_group_update/".$value->ids) )?>" class="action-contact-group-import btn btn-sm btn-label-info" title="<?php _e("Edit contact group")?>" data-placement="bottom" data-toggle="tooltip" data-result="html"><i class="ri-edit-line"></i></a>
								<a href="<?php _e( get_module_url("delete_contact_group") )?>" data-id="<?php _e( $value->ids )?>" class="actionItem btn btn-sm btn-label-info" title="<?php _e("Delete contact group")?>" data-placement="bottom" data-toggle="tooltip" data-remove="item-contact-group" data-confirm="<?php _e("Are you sure to delete this items?")?>"><i class="ri-delete-bin-6-line"></i></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
            <?php endforeach ?>
        </div>
        <?php }else{?>
		<div class="wrap-m h-100">
			<div class="empty">
				<div class="icon"></div>
				<a href="javascript:void(0);" class="btn btn-sm btn-info d-inline-block d-lg-none mr-2 wa-back-submenu" data-result="html"><i class="ri-arrow-left-s-line"></i> <?php _e("Back")?></a>
				<a href="<?php _e( get_module_url("get/contact_group_update/") )?>" class="action-contact-group-import btn btn-sm btn-info" data-result="html"><i class="ri-contacts-book-line"></i> <?php _e("Add new")?></a>
			</div>
		</div>
        <?php }?>
	</div>

	<nav class="m-t-30">
    <?php _e( $result['pagination'], false)?>
    </nav>
</div>

<script type="text/javascript">
    $(function () {  $('[data-toggle="tooltip"]').tooltip() })
	$(function(){ $(".page-link").addClass("wa-action-item").attr('data-result-content', 'wa-content'); });
</script>