<div class="input-group box-search-one">
  	<input class="form-control search-input" type="text" autocomplete="off" placeholder="<?php _e('Search')?>">
  	<span class="input-group-append">
	    <button class="btn" type="button">
	        <i class="fa fa-search"></i>
	    </button>
	</span>
</div>

<div class="widget">
	<div class="widget-list search-list">
		<?php //print_r($result); 
		if( !empty($result) ){
			 foreach ($result as $row):
				 $username = get_full_name(get_data($row, 'account_id')); ?>

			<div class="widget-item widget-item-3 search-list <?php _e( get_data($row, 'user', 'class', segment(4)) )?>">
				<a 
					class="actionItem" 
					data-result="html" 
					data-content="column-two" 
					href="<?php _e( get_module_url('index/ticket/' . get_data($row, 'id')))?>" 
					data-history="<?php _e( get_module_url('index/ticket/' . get_data($row, 'id')))?>"
				>
					<div class="icon">
						<img class="p-5" src="https://ui-avatars.com/api/?name=<?php _e($username)?>&amp;background=<?php _e(get_option('support_back_color_list_icon', '7D7D7D'))?>&amp;color=<?php _e(get_option('support_text_color_list_icon', 'FFFFFF'))?>&amp;font-size=0.5&amp;rounded=true">
					</div>
					<div class="content content-2">
						<div class="title fw-5 p-t-0">
							<span class="text-info"><?php _e( "[#". get_data( $row, 'id' ) ."] ")?></span> <?php _e(get_data($row, 'title'))?>
						</div>
						<div class="desc">
						<?php if(get_data($row, 'status') == 1){ ?>
							<i class="fas fa-circle text-success"></i>
						<?php } else { ?>
							<i class="far fa-check-circle text-dark"></i>
						<?php } ?> 
							<span class="text-info"><?php _e($username)?></span> <span>- <?php _e(time_elapsed_string(get_data($row, 'created')))?></span>
						</div>
					</div>
				</a>
			</div>
			<?php endforeach ?>

		<?php } else {?>
			<div class="empty small"></div>
		<?php } ?>
	</div>
</div>