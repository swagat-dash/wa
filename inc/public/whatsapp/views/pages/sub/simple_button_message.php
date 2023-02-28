<div class="container p-25">
        <?php if ( !empty($result) ) {?>
        <div class="row">
            <div class="col-md-12 m-b-15">
                <a href="javascript:void(0);" class="btn btn-sm btn-info d-inline-block d-lg-none mr-2 wa-back-submenu" data-result="html"><i class="ri-arrow-left-s-line"></i> <?php _e("Back")?></a>
                <a href="<?php _e( get_module_url("get/simple_button_update/") )?>" class="wa-action-item btn btn-sm btn-info float-right" data-result-content="wa-content"><i class="ri-contacts-book-line"></i> <?php _e("Add new")?></a>
            </div>
            <?php foreach ($result as $key => $value): ?>
            <div class="col-sm-4 col-md-4 item-list-message">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-center m-b-15">
                            <div class="fs-35 text-center rounded-circle bg-primary w-50 h-50"><i class="ri-list-check"></i></div>
                        </div>
                        <p class="card-text">
                            <h5 class="fs-14 text-center"><?php _e( $value->name )?></h5>
                            <div class="text-muted text-center fs-12"><?php _e(  sprintf( __('%d buttons'), count(  json_decode($value->data)->buttons ) ) )?></div>
                        </p>
                        <div class="d-flex justify-content-center align-items-center text-center">
                            <div class="btn-group">
                                <a href="<?php _e( get_module_url("get/simple_button_update/".$value->ids) )?>" class="wa-action-item btn btn-sm btn-label-info" data-result-content="wa-content"><i class="ri-edit-line" title="<?php _e("Edit")?>"></i></a>
                                <a href="<?php _e( get_module_url("delete_list_template") )?>" data-id="<?php _e( $value->ids )?>" class="actionItem btn btn-sm btn-label-info" data-remove="item-list-message" data-confirm="<?php _e("Are you sure to delete this items?")?>"><i class="ri-delete-bin-6-line"></i></a>
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
                <a href="<?php _e( get_module_url("get/simple_button_update/") )?>" class="btn btn-sm btn-info wa-action-item" data-result-content="wa-content"><i class="ri-contacts-book-line"></i> <?php _e("Add new")?></a>
            </div>
        </div>
        <?php }?>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(".page-link").addClass("wa-action-item").attr('data-result-content', 'wa-content');
    });
</script>