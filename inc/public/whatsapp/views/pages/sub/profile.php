<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div class="px-4 pt-4">
        <h4 class="mb-4"><?php _e('Profile')?></h4>
    </div> <!-- .p-4 -->
    <div class="chat-message-detail wa-scroll px-4 m-t-30 p-b-25">
    	<div class="text-center">
    		<div class="mb-4 profile-user">
	    		<img src="<?php _e( (isset($result->avatar) && $result->avatar)?$result->avatar:get_avatar($result->id))?>" alt="" class="rounded-circle avatar-lg img-thumbnail">
	    	</div>
	    	<?php if($result->verifiedName != ""){?>
	    	<h5 class="font-size-16 mb-1 text-truncate"> <?php _e( $result->verifiedName )?> </h5>
	    	<?php }?>
	    	<p class="text-muted text-truncate mb-1"> <?php _e( $result->id )?> </p>
	    	<p class="text-muted text-truncate mb-1"><i class="ri-record-circle-fill font-size-10 text-success mr-1 d-inline-block"></i> <?php _e("Active")?> </p>
    	</div>
        <ul class="list-group m-t-50">
		  	<li class="list-group-item justify-content-between align-items-center text-center">
		    	<p class="m-b-5"><i class="fas fa-key"></i> <?php _e("Access Token")?></p>
		    	<span class="text-info"><?php _e( _s("team_id") )?></span>
		  	</li>
		  	<li class="list-group-item d-flex justify-content-between align-items-center">
		    	<?php _e("Instance ID")?>
		    	<span class="badge badge-success badge-pill"><?php _e($account->token)?></span>
		  	</li>
		</ul>
	    <div class="m-t-15">
			<a class="btn btn-danger btn-block wa-action-item wa-back-account wa-button-logout" href="<?php _e( get_module_url("get/logout") )?>" data-result-submenu="wa-submenu-data" data-result-content="wa-content">
	    		<?php _e("Logout")?>
			</a>
	    </div>
    </div>

    <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->