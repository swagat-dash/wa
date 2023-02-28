<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4">

            <?php _e('Export participants')?>            
            <div class="option float-right position-relative">
                <a class="btn btn-sm btn-success p-t-1 p-r-5 p-l-5 p-b-1 wa-reset-scrolll wa-action-item" id="pills-bot-tab" href="<?php _e( get_module_url("get/export_participants") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content">
                    <i class="fas fa-sync"></i> <?php _e("Reload")?>
                </a>
            </div>
            
        </h4>
        <div class="search-box chat-search-box">            
            <div class="input-group mb-3 rounded-3">
                <span class="input-group-text text-muted bg-white pe-1 ps-3"> 
                    <i class="ri-search-line search-icon fs-18"></i>
                </span>
                <input type="text" class="form-control search-input" placeholder="<?php _e('Search messages or users')?>">
            </div> 
        </div> <!-- Search Box-->
    </div> <!-- .p-4 -->

    <!-- Start chat-message-list -->
    <div class="px-2">
        <h5 class="mb-3 px-3 fs-16"><?php _e('Recent')?></h5>
    </div>
    <div class="chat-message-list wa-scroll px-2">

        <?php if(!empty($result)){ ?>
        <ul class="list-unstyled chat-list chat-user-list">
            <?php foreach ($result as $key => $value): 
                $name = $value->id;
                if(isset($value->subject) && $value->subject){
                    $name = $value->subject;
                }
            ?>

            <?php if( strpos($value->id, "@g.us") !== false ){?>
            <li class="wa-submenu-item unread search-list">
                <a href="<?php _e( get_module_url("get/download_participants?chat_id=".$value->id) )?>" class="wa-action-item open-chat-item" data-redirect="true" data-chat-id="<?php _e($value->id)?>" data-result-content="wa-content" >
                    <div class="d-flex">                            
                        <div class="chat-user-img online align-self-center mr-3 ms-0">
                            <img src="<?php _e( get_avatar($name) )?>" class="rounded-circle avatar-xs" alt="">
                            <span class="user-status"></span>
                        </div>

                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e( $name )?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e( strpos($value->id, "@g.us") !== false?__("Group ID: ")." ".$value->id:__("User") )?></p>
                        </div>
                    </div>
                </a>
            </li>
        	<?php }?>
            <?php endforeach ?>
        </ul>
        <div class="d-flex">
            <div class="justify-content-center align-self-center w-100 p-25">
                <div class="icon fs-45 text-success"><i class="ri-survey-line"></i></div>
                <div class="detail">
                    <div class="title fs-25 fw-6"><?php _e("How to use?")?></div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php _e("1. Send a message to group you want export participants")?></li>
                        <li class="list-group-item"><?php _e("2. Click reload 'Button'")?></li>
                        <li class="list-group-item"><?php _e("3. Click to group you want export on list")?></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php }else{?>
            <div class="h-100">
                <div class="empty p-t-30">
                    <div class="icon"></div>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center align-self-center w-100 p-25">
                        <div class="icon fs-45 text-success"><i class="ri-survey-line"></i></div>
                        <div class="detail">
                            <div class="title fs-25 fw-6"><?php _e("How to use?")?></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php _e("1. Send a message to group you want export participants")?></li>
                                <li class="list-group-item"><?php _e("2. Click reload 'Button'")?></li>
                                <li class="list-group-item"><?php _e("3. Click to group you want export on list")?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->