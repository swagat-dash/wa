<?php if( isset($value->message->imageMessage) ){ ?>
	<a href="data:<?php _e( $value->message->imageMessage->mimetype )?>;base64,<?php _e( $value->media )?>" data-fancybox="images">
		<img src="data:<?php _e( $value->message->imageMessage->mimetype )?>;base64,<?php _e( $value->media )?>">
    </a>
<?php }else if( isset($value->message->videoMessage) ){ ?>
	<span>
      	<video class="video" controls autoplay>
        	<source type="video/mp4" src="data:<?php _e( $value->message->videoMessage->mimetype )?>;base64,<?php _e( $value->media )?>">
      	</video>
    </span>
<?php }else if( isset($value->message->audioMessage) ){ ?>
	<span>
      	<video class="video audio h-40" controls autoplay>
        	<source type="<?php _e( $value->message->audioMessage->mimetype )?>" src="data:<?php _e( $value->message->audioMessage->mimetype )?>;base64,<?php _e( $value->media )?>">
      	</video>
      	<div class="text"><?php _e( turnUrlIntoHyperlink( @$value->message->audioMessage->caption ), false)?></div>
    </span>
<?php }?>