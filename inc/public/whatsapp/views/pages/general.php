<style>
@media (max-width: 991.98px) { 
    .tooltip{
        display:none!important;
    }
}
</style>
<div class="h-100 d-lg-flex">
    
    <div class="wa-menu flex-lg-column me-lg-1 ms-lg-0 d-flex justify-content-center overflow-hidden">
        <div class="navbar-brand-box">
            <a href="<?php _e( get_module_url() )?>" class="logo logo-dark">
                <span class="logo-sm fs-30">
                    <i class="fab fa-whatsapp text-success"></i>
                </span>
            </a>
        </div>
        <div class="flex-lg-column wa-actions">
            <div class="wa-menu-nav">
                <div class="nav-item">
                    <a class="nav-link hover" href="<?php _e( get_url("whatsapp_profiles") )?>" data-toggle="tooltip" data-placement="auto" title="<?php _e("Add account")?>">
                        <i class="ri-add-circle-line"></i>
                    </a>
                </div>
            </div> 
        </div>
        <div class="flex-lg-column my-auto overflow-hidden wa-account-wrapper">
            <div class="d-lg-flex h-100">
                <div class="wa-menu-nav wa-accounts nav nav-pills justify-content-center my-auto overflow-hidden wa-scroll" id="wa-accounts">
                    <?php if( !empty($accounts) ){?>
                    
                        <?php foreach ($accounts as $key => $value): ?>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-instance-id="<?php _e( $value->token )?>" data-access-token="<?php _e($access_token)?>"  title="<?php _e($value->name)?>" data-toggle="tooltip" data-placement="right">
                                <img src="<?php _e( get_img_url( $value->avatar ) )?>">
                            </a>
                        </div>
                        <?php endforeach ?>
                    <?php }?>
                </div>
                <div class="wa-pages overflow-hidden wa-scroll h-100" id="wa-pages"></div>
            </div>
        </div>
        <div class="flex-lg-column d-lg-block wa-settings">
            <ul class="nav wa-menu-nav justify-content-center">
                <li class="nav-item w-100">
                    <a class="nav-link wa-reset-scrolll wa-action-item wa-back-account" href="<?php _e( get_module_url("get/empty") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                </li>
            </ul>
        </div>
        <?php if(is_dir(FCPATH."api") && _p("whatsapp_api")){ ?>
        <div class="flex-lg-column wa-settings">
            <ul class="nav wa-menu-nav justify-content-center">
                <li class="nav-item w-100">
                    <a class="nav-link wa-reset-scrolll wa-action-item" href="<?php _e( get_module_url("get/api") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" title="<?php _e("API")?>" data-toggle="tooltip" data-placement="right">
                        <i class="ri-plug-2-line"></i>
                    </a>
                </li>
            </ul>
        </div>
        <?php }?>
    </div>

    <div class="wa-submenu">
        <div class="tab-content wa-submenu-data" id="nav-tabs">
            <?php include 'sub/start.php'?>
        </div>
    </div>
    
    <div class="wa-content w-100 overflow-hidden wa-scroll d-flex">
        <?php include 'sub/empty.php'?>
    </div>
    
</div>