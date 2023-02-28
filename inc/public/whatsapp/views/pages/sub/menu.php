<ul class="nav wa-menu-nav justify-content-center nav-tabs m-auto" id="nav-tab" role="tablist">
    
    <?php if( _p("whatsapp_profile") ){?>
    <li class="nav-item" title="<?php _e("Profile")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-profile" id="pills-user-tab" href="<?php _e( get_module_url("get/profile") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-user-2-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if(1 != 1 && _p("whatsapp_chat") ){?>
    <li class="nav-item" title="<?php _e("Chats")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-chat" id="pills-chat-tab" href="<?php _e( get_module_url("get/chat") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-message-3-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_autoresponder") ){?>
    <li class="nav-item d-none" title="<?php _e("Contacts")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-contact" id="pills-contacts-tab" href="<?php _e( get_module_url("get/contact") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-contacts-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_autoresponder") ){?>
    <li class="nav-item" title="<?php _e("Autoresponder")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-autoresponder" id="pills-autoresponder-tab" href="<?php _e( get_module_url("get/autoresponder") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-reply-all-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_bulk") ){?>
    <li class="nav-item" title="<?php _e("Bulk messaging")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-bulk" id="pills-bulk-tab" href="<?php _e( get_module_url("get/bulk") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-question-answer-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_chatbot") ){?>
    <li class="nav-item" title="<?php _e("Chatbot")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-chatbot" id="pills-bot-tab" href="<?php _e( get_module_url("get/chatbot") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-robot-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_button_status") || _p("whatsapp_list_message_status") ){?>
    <li class="nav-item" title="<?php _e("Template")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item menu-item-template" id="pills-bot-tab" href="<?php _e( get_module_url("get/template") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-layout-line"></i>
        </a>
    </li>
    <?php }?>
    <?php if( _p("whatsapp_export_participants") ){?>
    <li class="nav-item" title="<?php _e("Export participants in a group")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item" id="pills-bot-tab" href="<?php _e( get_module_url("get/export_participants") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-group-2-line"></i>
        </a>
    </li>
    <?php }?>
    
    <?php if( _p("whatsapp_link_generator") ){?>
    <li class="nav-item" title="<?php _e("Link Generator")?>" aria-selected="false" data-toggle="tooltip" data-placement="right">
        <a class="nav-link wa-reset-scrolll wa-action-item" id="pills-bot-tab" href="<?php _e( get_module_url("get/link_generator") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content" role="tab" data-toggle="tab">
            <i class="ri-link"></i>
        </a>
    </li>
    <?php }?>
</ul>