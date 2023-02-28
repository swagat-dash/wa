<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4"><?php _e('Template')?></h4>
    </div> <!-- .p-4 -->

    <div class="chat-message-detail wa-scroll px-2">
        <ul class="list-unstyled chat-list chat-user-list">
            <?php if( _p("whatsapp_list_message_status") ){?>
            <li class="unread wa-submenu-item">
                <a class="wa-action-item wa-open-content menu-item-list-template" data-result-content="wa-content" href="<?php _e( get_module_url("get/template_list_message") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <div class="icon bg-info"><i class="ri-list-check"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("List message template")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Manage all list message template")?></p>
                        </div>
                    </div>
                </a>
            </li>
            <?php }?>
            <?php if( _p("whatsapp_button_status") ){?>
            <!--<li class="unread wa-submenu-item wa-contact-group-create">-->
            <!--    <a class="wa-action-item wa-open-content menu-item-button-template" data-result-content="wa-content" href="<?php _e( get_module_url("get/template_button_message") )?>">-->
            <!--        <div class="d-flex">-->
            <!--            <div class="chat-user-img away align-self-center mr-3 ms-0">-->
            <!--                <div class="icon bg-info"><i class="ri-radio-button-line"></i></div>-->
            <!--            </div>-->
            <!--            <div class="flex-1 overflow-hidden">-->
            <!--                <h5 class="text-truncate fs-15 mb-1"><?php _e("Button message template")?></h5>-->
            <!--                <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Manage all buttons message template (not work on ios)")?></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</li>-->
            
            <li class="unread wa-submenu-item wa-contact-group-create">
                <a class="wa-action-item wa-open-content menu-item-button-template" data-result-content="wa-content" href="<?php _e( get_module_url("get/simple_button_message") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <!--<div class="icon bg-info"><i class="ri-stop-line"></i></div>-->
                            <div class="icon bg-info"><i class="ri-radio-button-line"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("Button message template")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0">Manage all simple buttons message<br>(work on ios, android, WEB, Blueberry, JioPhone, etc...)</p>
                        </div>
                    </div>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
