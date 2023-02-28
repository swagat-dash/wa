<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active wa-chatbot" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4"><?php _e('Chatbot')?>
            <div class="option float-right position-relative">
                <div class="dropdown d-inline-block">
                    <a href="#" class="btn btn-info btn-sm p-t-1 p-r-5 p-l-5 p-b-1 dropdown-toggle" data-toggle="dropdown"><?php _e('Option');?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php _e( get_module_url("export_bots?instance_id=".$instance_id) )?>"><?php _e('Export'); ?></a>
                        <a class="dropdown-item wa-action-item wa-open-content" data-result-content="wa-content" href="<?php _e( get_module_url("get/chatbot_import") )?>"><?php _e('Import'); ?></a>
                    </div>
                </div>
                
                <a class="btn btn-sm btn-success p-t-1 p-r-5 p-l-5 p-b-1 wa-action-item wa-open-content" data-result-content="wa-content" href="<?php _e( get_module_url("get/chatbot_update") )?>" ><i class="fas fa-plus"></i> <?php _e("Add new")?></a>
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
        <h5 class="mb-3 px-3 fs-16">
            <?php _e('List')?>

            <?php if(!empty($result)){?>
            <div class="wa-cb-option float-right">
                <label class="i-switch i-switch--outline i-switch--info" data-toggle="tooltip" data-placement="top" title="<?php _e("Turn on/off chatbot")?>">
                    <input type="checkbox" name="chatbot_status" class="action-save" data-type="like" <?php _e( $result[0]->run?'checked="true"':"" )?> value="<?php _e( $instance_id )?>">
                    <span></span>
                </label>
            </div>
            <?php }?>
        </h5>
    </div>
    <div class="chat-message-list wa-scroll px-2">

        <?php if(!empty($result)){?>
        <ul class="list-unstyled chat-list chat-user-list">
            <?php foreach ($result as $key => $value): ?>
            <li class="wa-submenu-item unread search-list position-relative">
                <a href="<?php _e( get_module_url("get/chatbot_update/get_chat/".$value->ids) )?>" class="wa-action-item wa-open-content" data-result-content="wa-content" >
                    <div class="d-flex">                            
                        <div class="chat-user-img online align-self-center mr-3 ms-0">
                            <img src="<?php _e( get_avatar($value->name) )?>" class="rounded-circle avatar-xs" alt="">
                            <span class="user-status"></span>
                        </div>

                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e( $value->name )?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e( $value->keywords )?></p>
                        </div>
                        <div class="fs-11">
                            <?php _e( time_elapsed_string( $value->changed ) )?>
                        </div>
                    </div>
                </a>
                <div class="fs-12 text-right position-absolute r-21 t-40 ">
                    <a href="<?php _e( get_module_url("chatbot_delete/".$value->ids) )?>" data-id="<?php _e($value->ids)?>" class="p-0 text-danger actionItem" data-remove="wa-submenu-item">
                        <i class="fas fa-trash-alt"></i>
                    </a>
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