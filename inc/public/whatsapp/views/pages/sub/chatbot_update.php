<div class="p-25 wa-chatbot-update">
	<h4 class="mb-4 align-items-center d-flex">
		<div class="d-block d-lg-none mr-2">
			<a href="javascript:void(0);" class="user-chat-remove wa-back-submenu text-muted fs-16 p-2">
				<i class="ri-arrow-left-s-line"></i>
			</a>
		</div>
		<div><?php _e("Update")?></div>
	</h4>

	<div class="row">
		<div class="col-md-12 post">
			<form class="actionForm post-create p-t-10" action="<?php _e( get_module_url("chatbot_save") )?>" data-call-after="WhatsappJs.reload_chatbot(result);">
				<div class="post-content m-b-15">
		            <h5 class="mb-3 fs-14"><?php _e('Status')?></h5>
		            <div class="mb-2">
		                <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                    <input type="radio" name="status" checked="true" value="1" <?php _e( get_data($result, 'status', 'radio', 1) )?> > <?php _e('Enable')?>
		                    <span></span>
		                </label>
		                <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                    <input type="radio" name="status" value="0" <?php _e( get_data($result, 'status', 'radio', 0) )?> > <?php _e('Disable')?>
		                    <span></span>
		                </label>
		            </div>

		            <div class="mb-2">
		                <h5 class="mb-3 fs-14"><?php _e('Sent to')?></h5>
		                <div class="mb-2">
		                    <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                        <input type="radio" name="send_to" checked="true" value="1" <?php _e( get_data($result, 'send_to', 'radio', 1) )?> > <?php _e('All')?>
		                        <span></span>
		                    </label>
		                    <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                        <input type="radio" name="send_to" value="2" <?php _e( get_data($result, 'send_to', 'radio', 2) )?> > <?php _e('Individual')?>
		                        <span></span>
		                    </label>
		                    <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                        <input type="radio" name="send_to" value="3" <?php _e( get_data($result, 'send_to', 'radio', 3) )?> > <?php _e('Group only')?>
		                        <span></span>
		                    </label>
		                </div>
		            </div>

		            <h5 class="mb-3 fs-14"><?php _e('Type')?></h5>
		            <div class="mb-2">
		                <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                    <input type="radio" name="type" checked="true" value="1" <?php _e( get_data($result, 'type', 'radio', 1) )?> > <?php _e('Message contains the keyword')?>
		                    <span></span>
		                </label>
		                <label class="i-radio i-radio--tick i-radio--brand m-r-10">
		                    <input type="radio" name="type" value="2" <?php _e( get_data($result, 'type', 'radio', 2) )?> > <?php _e('Message contains whole keyword')?>
		                    <span></span>
		                </label>
		            </div>

					<?php if(!empty($result)){?>
						<input type="hidden" class="form-control" name="ids" required="" value="<?php _e( $result->ids )?>">
					<?php }?>
					<input type="hidden" class="form-control" name="instance_id" required="" value="<?php _e( $instance_id )?>">
					<div class="form-group">
						<input class="form-control" name="name" required="" placeholder="<?php _e("Name")?>" value="<?php _e( get_data($result, 'name') )?>">
					</div>
					<div class="form-group">
						<input class="form-control tagsinput" type="text" name="keywords" data-role="tagsinput" placeholder="<?php _e("Enter keywords")?>" value="<?php _e( get_data($result, 'keywords') )?>">
					</div>

					<nav class="mt-3">
			            <div class="nav nav-tabs" id="nav-tab" role="tablist">
			                <label for="option_send_message" class="nav-item nav-link radio-tab <?php _e( ( get_data($result, 'cate')==1 || empty($result) )?"active text-primary":"" ) ?>" data-toggle="tab" href="#nav_send_menssage" role="tab">
			                    <input class="d-none" type="radio" name="cate" id="option_send_message" <?php _e( ( get_data($result, 'cate')==1 || empty($result) )?'checked="true"':"" ) ?> value="1">
			                    <i class="far fa-file-alt" aria-hidden="true"></i> <?php _e("Text & Media")?>
			                </label> 
			                <?php if( _p("whatsapp_button_status") ){?>
			                <label for="option_send_button" class="nav-item nav-link radio-tab <?php _e( get_data($result, 'cate')==2?"active text-primary":"") ?>" data-toggle="tab" href="#nav_send_button" role="tab">
			                    <input class="d-none" type="radio" name="cate" id="option_send_button" value="2" <?php _e( get_data($result, 'cate')==2?'checked="true"':"") ?> >
			                    <i class="fa fa-ad" aria-hidden="true"></i> <?php _e("Buttons")?>
			                </label>
			                <?php }?>
			                <?php if( _p("whatsapp_list_message_status") ){?>
			                <label for="option_send_list" class="nav-item nav-link radio-tab <?php _e( get_data($result, 'cate')==3?"active text-primary":"") ?>" data-toggle="tab" href="#nav_send_list" role="tab">
			                    <input class="d-none" type="radio" name="cate" id="option_send_list" value="3" <?php _e( get_data($result, 'cate')==3?'checked="true"':"") ?> >
			                    <i class="fa fa-list-ul" aria-hidden="true"></i> <?php _e("List message")?>
			                </label>
			                <?php }?>
			            </div>
			        </nav>

			        <div class="tab-content pt-3" id="nav-tabContent">
			        	<div class="tab-pane fade <?php _e( ( get_data($result, 'cate')==1 || empty($result) )?"show active":"" ) ?>" id="nav_send_menssage" role="tabpanel">
				            <?php if( _p("whatsapp_chatbot_media") ){?>
					            <?php _e( $file_manager, false) ?>
						    <?php }?>
							<div class="post">
						        <div class="post-content">
					                <?php _e( $block_caption, false)?>
					                <ul class="text-success small m-b-0 m-t-3">
			                            <li><?php _e("Random message by Spintax")?></li>
			                            <li><?php _e("Ex: {Hi|Hello|Hola}")?></li>
			                        </ul>
						        </div>
						    </div>
				        </div>
				        <?php if( _p("whatsapp_button_status") ){?>
			            <div class="tab-pane fade <?php _e( get_data($result, 'cate')==2?"show active":"") ?>" id="nav_send_button" role="tabpanel">
			                <div class="m-b-15 customscroll">
						  		<ul class="list-group">
							  		<?php
							  		if(!empty( $buttons )){

			                        	foreach($buttons as $button){?>
			                                <li class="list-group-item">
			                                	<label class="i-radio i-radio--tick i-radio--brand m-b-1">
													<input type="radio" name="btn_msg" <?php _e( get_data($result, 'template', 'radio', $button->id) )?> value="<?php _e($button->id)?>" > <?php _e( $button->name )?>
													<span class="m-t-2"></span>
												</label>
			                                </li>
			                        	<?php }?>
									<?php }else{?>
		                                <div class="empty p-t-30">
		                                    <div class="icon"></div>
		                                </div>
		                            <?php }?>
								</ul>
						  	</div>
			            </div>
			            <?php }?>
			            <?php if( _p("whatsapp_list_message_status") ){?>
			            <div class="tab-pane fade <?php _e( get_data($result, 'cate')==3?"show active":"") ?>" id="nav_send_list" role="tabpanel">
			                <div class="m-b-15 customscroll">
						  		<ul class="list-group">
							  		<?php
							  		if(!empty( $list_message )){

			                        	foreach($list_message as $value){?>
			                                <li class="list-group-item">
			                                	<label class="i-radio i-radio--tick i-radio--brand m-b-1">
													<input type="radio" name="list_msg" <?php _e( get_data($result, 'template', 'radio', $value->id) )?> value="<?php _e($value->id)?>" > <?php _e( $value->name )?>
													<span class="m-t-2"></span>
												</label>
			                                </li>
			                        	<?php }?>
									<?php }else{?>
		                                <div class="empty p-t-30">
		                                    <div class="icon"></div>
		                                </div>
		                            <?php }?>
								</ul>
						  	</div>
			            </div>
			            <?php }?>
			        </div>
				</div>

			  	<button type="submit" class="btn btn-info m-b-25"><?php _e('Save')?></a>
			</form>
		</div>
	</div>

</div>

<?php if(!empty($result)){?>
    <script type="text/javascript">
        var caption = `<?php _e($result->caption)?>`;

        <?php if($result->media != NULL){?>
        var medias = <?php _e($result->media)?>;
    	<?php }else{?>
		var medias = [];
    	<?php }?>

        $(function(){

            setTimeout(function(){
                var el = $("textarea[name=caption]").emojioneArea();
                el[0].emojioneArea.setText(caption);

                if(medias != null){
                    for (var i = 0; i < medias.length; i++) {
                        File_Manager.addFile(medias[i], medias[i]);
                    }
                }
            }, 1000);

        });

    </script>
<?php }?>