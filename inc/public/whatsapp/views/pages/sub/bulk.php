<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4"><?php _e('Bulk messaging')?></h4>
    </div> <!-- .p-4 -->

    <div class="chat-message-detail wa-scroll px-2">
        <ul class="list-unstyled chat-list chat-user-list">
            <li class="unread wa-submenu-item">
                <a class="wa-action-item wa-open-content wa-contact-group-menu" data-result-content="wa-content" href="<?php _e( get_module_url("get/contact_group") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <div class="icon bg-info"><i class="ri-contacts-book-2-line"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("Contact group")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Manage all your contacts")?></p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="unread wa-submenu-item wa-contact-group-create">
                <a class="wa-action-item wa-open-content" data-result-content="wa-content" href="<?php _e( get_module_url("get/contact_create_campaign") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <div class="icon bg-info"><i class="ri-add-circle-line"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("Create campaign")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Start your bulk messaging plan")?></p>
                        </div>
                    </div>
                </a>
            </li>
            
            <?php if( _p("whatsapp_bulk_report") ){?>
            <li class="unread wa-submenu-item wa-contact-group-shedule">
                <a class="wa-action-item wa-open-content" data-result-content="wa-content" href="<?php _e( get_module_url("get/bulk_report") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <div class="icon bg-info"><i class="ri-file-chart-line"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("Campaign report")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Download bulk report")?></p>
                        </div>
                    </div>
                </a>
            </li>
            <?php }?>
            
            <li class="unread wa-submenu-item wa-contact-group-shedule">
                <a class="wa-action-item wa-open-content" data-result-content="wa-content" href="<?php _e( get_module_url("get/contact_schedules") )?>">
                    <div class="d-flex">
                        <div class="chat-user-img away align-self-center mr-3 ms-0">
                            <div class="icon bg-info"><i class="ri-calendar-2-line"></i></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <h5 class="text-truncate fs-15 mb-1"><?php _e("WhatsApp Schedules")?></h5>
                            <p class="chat-user-message text-truncate fs-11 mb-0"><?php _e("Manage all bulk messaging campaigns")?></p>
                        </div>
                    </div>
                </a>
            </li>

        </ul>
    </div>
    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->