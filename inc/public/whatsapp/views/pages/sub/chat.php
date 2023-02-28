<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4">
            <?php _e('Chats')?>
            <a class="float-right btn btn-sm btn-success p-t-1 p-r-5 p-l-5 p-b-1 wa-action-item wa-open-content" data-result-submenu="wa-submenu-data" href="<?php _e( get_module_url("get/reload_chat") )?>" ><i class="fas fa-sync"></i> <?php _e("Refesh")?></a>
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

        <?php if(!empty($result)){?>
        <ul class="list-unstyled chat-list chat-user-list">
            <?php
            $result = array_slice($result, 0, 500); 
            foreach ($result as $key => $value): 
                $name = wa_get_phone($value->jid);
                if(isset($value->name) && $value->name){
                    $name = $value->name;
                }
            ?>
            <li class="wa-submenu-item unread search-list">
                <a href="<?php _e( get_module_url("get/get_chat?chat_id=".$value->jid) )?>" class="wa-action-item wa-open-content open-chat-item" data-chat-id="<?php _e($value->jid)?>" data-result-content="wa-content" >
                    <div class="d-flex">
                        <?php if( isset($value->pin) ){?> 
                        <div class="pin text-warning"><i class="ri-pushpin-2-fill"></i></div>
                        <?php }?>
                        <div class="chat-user-img online align-self-center mr-3 ms-0">
                            <img src="<?php _e( get_avatar( $name ) )?>" class="rounded-circle avatar-xs" alt="">
                            <span class="user-status"></span>
                        </div>

                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e( $name )?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e( strpos($value->jid, "@g.us") !== false?__("Group"):__("User") )?></p>
                        </div>
                        <?php if(isset($value->t)){?>
                        <div class="fs-11"><?php _e( time_elapsed_string( $value->t ) )?></div>
                        <?php }?>
                    </div>
                </a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="dropdownMenuButton">
                        <?php if( !isset($value->pin) ){?>
                        <a class="dropdown-item wa-action-item fs-12" data-chat-id="<?php _e($value->jid)?>" href="<?php _e( get_module_url("get/pin_chat?chat_id=".$value->jid) )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content"><i class="ri-pushpin-2-fill"></i> <?php _e("Pin")?></a>
                        <?php }else{?>
                        <a class="dropdown-item wa-action-item fs-12" data-chat-id="<?php _e($value->jid)?>" href="<?php _e( get_module_url("get/unpin_chat?chat_id=".$value->jid) )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content"><i class="ri-pushpin-2-fill"></i> <?php _e("Unpin")?></a>
                        <?php }?>
                        <a class="dropdown-item wa-action-item fs-12" data-chat-id="<?php _e($value->jid)?>" href="<?php _e( get_module_url("get/clear_chat?chat_id=".$value->jid) )?>" data-result-content="wa-content" data-confirm="Are you sure to cleat message for chat?"><i class="ri-discuss-line"></i> <?php _e("Clear messages")?></a>
                        <a class="dropdown-item wa-action-item fs-12" data-chat-id="<?php _e($value->jid)?>" href="<?php _e( get_module_url("get/delete_chat?chat_id=".$value->jid) )?>" data-remove="wa-submenu-item" data-result-content="wa-content" data-confirm="Are you sure to delete this chat?"><i class="ri-delete-bin-6-line"></i> <?php _e("Delete chat")?></a>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
        <?php }else{?>
            <div class="h-100">
                <div class="empty p-t-30">
                    <div class="icon"></div>
                </div>
            </div>
        <?php }?>
    </div>
    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->