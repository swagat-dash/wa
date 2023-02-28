<?php if( isset($result->messages) && !empty($result->messages) ){ ?>

	<?php foreach ($result->messages as $key => $value):?>

		<?php include "get_message.php";?>

	<?php endforeach ?>

<?php }?>

<script type="text/javascript">
	$(function(){
		<?php if( isset($result->cursor) ){ ?>

			<?php 
			if($result->cursor->fromMe){
				$fromMe = 1;
			}else{
				$fromMe = 0;
			}

			?>

			$(".user-chat").data("load-more-url", "<?php _e( get_module_url("get/get_more_message?chat_id=".$chat_id."&cursor=".$result->cursor->id."&fromMe=".$fromMe) )?>" );
		<?php }else{?>
			$(".user-chat").data("load-more-url", "" );
		<?php }?>
	});
</script>