<?php 
if($value->key->fromMe){
    if($value->key->fromMe === "true"){
        $position = "right";
    }else if($value->key->fromMe === "false"){
        $position = "left";
    }else{
        $position = "right";
    }

}else{
    $position = "left";
}
?>


<?php if( isset($value->message->conversation) ){?>
    <div class="wa-item <?php _e( $position )?>"  data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="message">
            <span class="<?php _e( $position=="right"?"text-left d-block":"" )?>"><?php _e( turnUrlIntoHyperlink($value->message->conversation), false)?></span>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }else if( isset($value->message->extendedTextMessage) ){?>
    <div class="wa-item <?php _e( $position )?>"  data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="message">
            <span class="<?php _e( $position=="right"?"text-left d-block":"" )?>"><?php _e( turnUrlIntoHyperlink($value->message->extendedTextMessage->text), false)?></span>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }else if( isset($value->message->imageMessage) ){ ?>
    <?php if( isset($value->message->imageMessage->jpegThumbnail) ){?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="media">
            <div class="box-img">
                <img src="data:<?php _e( $value->message->imageMessage->mimetype )?>;base64,<?php _e( $value->message->imageMessage->jpegThumbnail )?>">
                <a href="<?php _e( get_module_url("get/get_file?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="overplay d-flex align-content-center flex-wrap w-100 fs-50 text-white text-center wa-get-file">
                    <i class="ri-eye-line w-100"></i>
                </a>
            </div>

            <div class="text <?php _e( $position=="right"?"text-left d-block":"" )?>"><?php _e( turnUrlIntoHyperlink( @$value->message->imageMessage->caption ), false)?></div>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php }?>
<?php }else if( isset($value->message->stickerMessage) ){ ?>
    <?php if( isset($value->media) ){?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="media bg-transparent">
            <a href="data:<?php _e( $value->message->stickerMessage->mimetype )?>;base64,<?php _e( $value->media )?>" data-fancybox="images"><img src="data:<?php _e( $value->message->stickerMessage->mimetype )?>;base64,<?php _e( $value->media )?>"></a>
            <div class="text"><?php _e( turnUrlIntoHyperlink( @$value->message->stickerMessage->caption ), false)?></div>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php }?>
<?php }else if( isset($value->message->videoMessage) ){ ?>
    <?php if( isset($value->message->videoMessage) ){

        if( isset($value->message->videoMessage->jpegThumbnail) ){
            $image = "data:video/jpeg;base64,".$value->message->videoMessage->jpegThumbnail;
        }else{
            $image = get_module_path( $this, "assets/img/no-video.png", false);
        }
    ?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="media">
            <div class="box-img">
                <img src="<?php _e( $image )?>">
                <a href="<?php _e( get_module_url("get/get_file?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="overplay d-flex align-content-center flex-wrap w-100 fs-50 text-white text-center wa-get-file">
                    <i class="ri-play-fill w-100"></i>
                </a>
            </div>

            <div class="text <?php _e( $position=="right"?"text-left d-block":"" )?>"><?php _e( turnUrlIntoHyperlink( @$value->message->videoMessage->caption ), false)?></div>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php }?>
<?php }else if( isset($value->message->audioMessage) ){?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="media">
            <div class="box-img">
                <a href="<?php _e( get_module_url("get/get_file?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-get-file">
                    <div class="d-flex align-items-center wa-audio">
                        <div class="fs-40 m-r-15 wa-audio-icon text-success"><i class="far fa-play-circle"></i></div>
                        <div>
                            <div class="wa-audio-name fw-6 text-dark"><?php _e("Audio")?></div>
                            <div class="wa-audio-time text-muted fs-12"><?php _e( sprintf("%d seconds", $value->message->audioMessage->seconds) )?></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }else if( isset($value->message->documentMessage) ){ ?>
    <?php if( isset($value->message->documentMessage) ){?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="file">
            <a href="<?php _e( get_module_url("get/get_file?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-get-file">
                <div class="download">
                    <div class="icon-file"><i class="fas fa-file"></i></div>
                    <div class="file-name"><?php _e( turnUrlIntoHyperlink( @$value->message->documentMessage->fileName ), false)?></div>
                    <div class="icon-download"><i class="fas fa-download"></i></div>
                </div>
                <div class="text"></div>
            </a>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php }?>
<?php }else if( isset($value->message->locationMessage) ){ ?>
    <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
        <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
        <div class="media">
            <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php _e($value->message->locationMessage->degreesLatitude)?>,<?php _e($value->message->locationMessage->degreesLongitude)?>+(title)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <?php if( @$value->message->locationMessage->name){?>
            <div class="text"><?php _e( turnUrlIntoHyperlink( @$value->message->locationMessage->name), false)?></div>
            <?php }?>
            <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }else if( isset($value->message->contactMessage) ){ ?>

    <?php if ( !empty($value->message->contactMessage->vcard) ): ?>
        
        <?php 
        $parser = new JeroenDesloovere\VCard\VCardParser( $value->message->contactMessage->vcard );
        if( isset( $parser->getCardAtIndex(0)->fullname ) || isset( $parser->getCardAtIndex(0)->phone ) || isset( $parser->getCardAtIndex(0)->email ) ){
        ?>
        <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
            <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
            <div class="media">
                <div class="fs-20 text-success"><i class="ri-contacts-book-line"></i></div>
                <div class="fw-6"><?php _e( $parser->getCardAtIndex(0)->fullname , false)?></div>
                <?php if( isset( $parser->getCardAtIndex(0)->phone ) ){?>
                    <?php foreach ($parser->getCardAtIndex(0)->phone as $phones): ?>
                        
                        <?php foreach ($phones as $key => $phone): ?>
                            <div><?php _e( $phone , false)?></div>
                        <?php endforeach ?>

                    <?php endforeach ?>
                <?php }?>
                <?php if( isset( $parser->getCardAtIndex(0)->email ) ){?>
                    <?php foreach ($parser->getCardAtIndex(0)->email as $emails): ?>
                        
                        <?php foreach ($emails as $key => $email): ?>
                            <div><?php _e( $email , false)?></div>
                        <?php endforeach ?>

                    <?php endforeach ?>
                <?php }?>
                <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php }?>

    <?php endif ?>

<?php }else if( isset($value->message->contactsArrayMessage) ){ ?>

    <?php if ( !empty($value->message->contactsArrayMessage->contacts) ): ?>
        
        <?php foreach ($value->message->contactsArrayMessage->contacts as $vCard): ?>
            
            <?php 
            $parser = new JeroenDesloovere\VCard\VCardParser($vCard->vcard);
            if( isset( $parser->getCardAtIndex(0)->fullname ) || isset( $parser->getCardAtIndex(0)->phone ) || isset( $parser->getCardAtIndex(0)->email ) ){
            ?>
            <div class="wa-item <?php _e( $position )?>" data-id="<?php _e( $value->key->id )?>">
                <a href="<?php _e( get_module_url("get/delete_message?chat_id=".$value->key->remoteJid."&message_id=".$value->key->id) )?>" class="wa-remove wa-action-item" data-remove="wa-item"><i class="ft-trash"></i></a>
                <div class="media">
                    <div class="fs-20 text-success"><i class="ri-contacts-book-line"></i></div>
                    <div class="fw-6"><?php _e( $parser->getCardAtIndex(0)->fullname , false)?></div>
                    <?php if( isset( $parser->getCardAtIndex(0)->phone ) ){?>
                        <?php foreach ($parser->getCardAtIndex(0)->phone as $values): ?>
                            
                            <?php foreach ($values as $key => $phone): ?>
                                <div><?php _e( $phone , false)?></div>
                            <?php endforeach ?>

                        <?php endforeach ?>
                    <?php }?>
                    <?php if( isset( $parser->getCardAtIndex(0)->email ) ){?>
                        <?php foreach ($parser->getCardAtIndex(0)->email as $values): ?>
                            
                            <?php foreach ($values as $key => $email): ?>
                                <div><?php _e( $email , false)?></div>
                            <?php endforeach ?>

                        <?php endforeach ?>
                    <?php }?>
                    <div class="time"><?php _e( time_elapsed_string( $value->messageTimestamp ) )?></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php }?>

        <?php endforeach ?>

    <?php endif ?>

<?php }else{?>

<?php }?>