<?php
if( isset($contact->name) ){
	$name = $contact->name;
}else{
	$name = wa_get_phone($contact->jid);
}
?>

<?php 
if( isset($result->cursor) ){
	if($result->cursor->fromMe){
		$fromMe = 1;
	}else{
		$fromMe = 0;
	}
	$load_more_url = get_module_url("get/get_more_message?chat_id=".$chat_id."&cursor=".$result->cursor->id."&fromMe=".$fromMe);
}else{
	$load_more_url = "";
}
?>

<div class="user-chat w-100 overflow-hidden" data-chat-id="<?php _e($chat_id)?>" data-endpoint="<?php _e( get_module_url("get/send_message?chat_id=".$chat_id) )?>" data-get-message="<?php _e( get_module_url("get/get_message?chat_id=".$chat_id) )?>" data-load-more-url="<?php _e( $load_more_url )?>">
	<div class="d-lg-flex h-100">
		<div class="w-100 h-100 overflow-hidden position-relative">
			<div class="p-20 p-lg-4 border-bottom">
				<div class="row align-items-center">
					<div class="col-sm-4 col-8">
						<div class="media align-items-center">
							<div class="d-block d-lg-none mr-2">
								<a href="javascript:void(0);" class="user-chat-remove wa-back-submenu text-muted fs-16 p-2">
									<i class="ri-arrow-left-s-line"></i>
								</a>
							</div>
							<div class="mr-3">
								<img src="<?php _e( $contact->avatar )?>" class="rounded-circle avatar-xs"></img>
							</div>
							<div class="media-body overflow-hidden">
								<div class="font-size-16 mb-0 text-truncate">
									<a href="javascript:void(0);" class="text-reset user-profile-show"><?php _e($name)?></a>
									<i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="chat-conversation">
				<div class="wa-body wa-scroll">
					<?php if( isset($result->messages) && !empty($result->messages) ){ ?>

						<?php foreach ($result->messages as $key => $value):?>

							<?php include "get_message.php";?>

						<?php endforeach ?>

					<?php }?>
				</div>
			</div>
			<div class="wa-editor">
				<div class="editor">
					<?php if( _p("whatsapp_chat_text") ){?>
				    <textarea class="input-message wa-text-message" placeholder="<?php _e("Enter message")?>"></textarea>
				    <?php }?>
			  	</div>
			  	<div class="action">
			  		<?php if( _p("whatsapp_chat_text") ){?>
				    <a href="javascript:void(0);" class="wa-btn-send-message"><i class="fas fa-paper-plane"></i></a>
				    <?php }?>
			  		<?php if( _p("whatsapp_chat_media") ){?>
				    <a href="javascript:void(0);" class="wa-fileinput-button"><i class="fas fa-paperclip"></i><input id="wa_send_media" type="file" name="file"></a>
			  		<?php }?>
			  	</div>
			</div>
		</div>
	</div>
</div>

