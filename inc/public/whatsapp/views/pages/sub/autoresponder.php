<!-- Start chats tab-pane -->
<div class="tab-pane h-100 show active autoresponder" id="pills-chat" role="tabpanel post" aria-labelledby="pills-chat-tab">
        <div class="px-4 pt-4">
            <h4 class="mb-4"><?php _e('Auto responder')?></h4>
        </div> <!-- .p-4 -->

        <div class="chat-message-detail wa-scroll px-2">
            <form class="actionForm post-create p-t-10 position-relative" action="<?php _e( get_module_url( 'autoresponder_save/'.segment(4) ) )?>">
            <div class="px-2">
                <div class="px-3">
                    <input type="hidden" class="form-control" name="instance_id" value="<?php _e( $instance_id )?>">
                </div>
            </div>
            <!-- Start chat-message-list -->
            <div class="px-2">
                <h5 class="mb-3 px-3 fs-14"><?php _e('Status')?></h5>
                <div class="px-3">
                    <label class="i-radio i-radio--tick i-radio--brand m-r-10">
                        <input type="radio" name="status" checked="true" value="1" <?php _e( get_data($result, 'status', 'radio', 1) )?> > <?php _e('Enable')?>
                        <span></span>
                    </label>
                    <label class="i-radio i-radio--tick i-radio--brand m-r-10">
                        <input type="radio" name="status" value="0" <?php _e( get_data($result, 'status', 'radio', 0) )?> > <?php _e('Disable')?>
                        <span></span>
                    </label>
                </div>
            </div>
            <div class="px-2">
                <h5 class="mb-3 px-3 fs-14"><?php _e('Sent to')?></h5>
                <div class="px-3">
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


            <nav class="mt-3 px-4 fs-12 position-relative t-1">
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

            <div class="tab-content pt-3 mx-4 bg-white border-right border-left border-bottom border-top" id="nav-tabContent">
                <div class="tab-pane fade p-15 <?php _e( ( get_data($result, 'cate')==1 || empty($result) )?"show active":"" ) ?>" id="nav_send_menssage" role="tabpanel">
                    <?php if( _p("whatsapp_autoresponder_media") ){?>
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
                <div class="tab-pane fade pt-15 p-l-15 p-r-15 <?php _e( get_data($result, 'cate')==2?"show active":"") ?>" id="nav_send_button" role="tabpanel">
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
                <div class="tab-pane fade pt-15 p-l-15 p-r-15 <?php _e( get_data($result, 'cate')==3?"show active":"") ?>" id="nav_send_list" role="tabpanel">
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

            <div class="px-4 mt-3">
                <h5 for="delay" class="fs-14"><?php _e('Resubmit message only after (minute)')?></h5>
                <select class="form-control" id="delay" name="delay">
                    <?php for ($i=1; $i <= 4; $i++) {?>
                        <?php if( _p("whatsapp_autoresponder_delay") <= $i ){?>
                            <option value="<?php _e($i)?>" <?php _e( !empty($result) && $result->delay == $i ? "selected":"" )?> ><?php _e($i)?></option>
                        <?php }?>
                    <?php } ?>
                    <?php 
                        for ($i=1; $i <= 3600; $i++) { 
                            if($i%5 == 0){
                    ?>
                        <?php if( _p("whatsapp_autoresponder_delay") <= $i ){?>
                        <option value="<?php _e($i)?>" <?php _e( !empty($result) && $result->delay == $i ? "selected":"" )?>><?php _e($i)?></option>
                        <?php }?>
                    <?php
                            }       
                        }
                    ?>
                </select>
            </div>
            <div class="px-4 mt-3">
                <h5 for="delay" class="fs-14"><?php _e("Except contacts")?></h5>
                <div id="ms1" class="form-control"></div>
                <div class="small">
                    <?php _e("Validate exapmle:")?> 
                    841234567890, 
                    840123456789
                </div>
            </div>
            <div class="px-4 mt-3 m-b-10">
                <button type="submit" class="btn btn-primary"><?php _e('Submit')?></button>
                <button type="button" class="btn btn-primary wa-btn-open-content d-block d-lg-none float-right"><?php _e('Preview')?></button>
            </div>
            </form>
        </div>
    </div>
        <!-- End chat-message-list -->
</div>
<!-- End chats tab-pane -->


<?php if($result){?>
    <script type="text/javascript">

        var caption = `<?php _e($result->data)?>`;
        var delay = `<?php _e( $result->delay )?>`;

        <?php if($result->media != NULL){?>
        var medias = <?php _e($result->media)?>;
        <?php }else{?>
        var medias = [];
        <?php }?>

        <?php 
            if($result->except != NULL){
                $except_data = [];
                $excepts = json_decode($result->except);
                if(!empty($excepts)){
                    foreach ($excepts as $value) {
                        $arr = explode("{|}", $value);
                        $except_data[] = [
                            "id" => $value,
                            "name" => $value
                        ];
                    }
                }
                $except_data = json_encode($except_data);
            }else{
                $except_data = "[]";
            }
        ?>

        $(function(){
            WhatsappJs.search_contact(<?php _e($except_data)?>);

            setTimeout(function(){
                $("[name=delay]").val(delay);

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
<?php }else{?>
<script type="text/javascript">
    $(function(){
        WhatsappJs.search_contact([]);
    });
</script>
<?php }?>


