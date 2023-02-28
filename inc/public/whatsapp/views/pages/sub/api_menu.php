<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4">
            <?php _e('API Documentation')?>
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
    <div class="chat-message-list wa-scroll px-2">
        <h5 class="mb-3 px-3 fs-14 m-t-20 text-dark text-uppercase fw-6"><i class="ri-book-read-line position-relative t-2"></i> <?php _e('Instance Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="m-b-8"><a href="#create-instance" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Create Instance")?></a></li>
	    	<li class="m-b-8"><a href="#get-qr-code" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("GET QR Code")?></a></li>
	    	<li class="m-b-8"><a href="#set-receving-webhook" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Set Receving Webhook")?></a></li>
	    	<li class="m-b-8"><a href="#reboot-instance" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Reboot Instance")?></a></li>
	    	<li class="m-b-8"><a href="#reset-instance" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Reset Instance")?></a></li>
	    	<li class="m-b-8"><a href="#reconnect" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Reconnect")?></a></li>
	    </ul> 

	    <h5 class="mb-3 px-3 fs-14 m-t-30 text-dark text-uppercase fw-6"><i class="ri-book-read-line position-relative t-2"></i> <?php _e('Send Direct Message Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="m-b-8"><a href="#send-text" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Send Text")?></a></li>
	    	<li class="m-b-8"><a href="#send-template" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Send Template")?></a></li>
	    	<li class="m-b-8"><a href="#send-media" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Send File")?></a></li>
	    	
	    </ul> 

	    <h5 class="mb-3 px-3 fs-14 m-t-30 text-dark text-uppercase fw-6"><i class="ri-book-read-line position-relative t-2"></i> <?php _e('Group Api')?></h5>
	    <ul class="wa-api-list px-3">
	    	<li class="m-b-8"><a href="#send-text-message-group" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Send Text Message Group")?></a></li>
	    	<li class="m-b-8"><a href="#send-media-message-group" class="text-muted"><span class="text-success fs-12 fw-6 m-r-10">POST</span> <?php _e("Send File Message Group")?></a></li>
	    </ul>  
    </div>
    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->