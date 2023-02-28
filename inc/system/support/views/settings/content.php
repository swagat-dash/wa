
	<div class="m-b-40">
		<div class="alert alert-solid-brand">
			<span class="fw-6">Need a custom mod or bug fix?</span> 
			<a href="https://wa.me/523312748960" target="_blank">Contact us</a>	
		</div>

  		<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Information column')?></h5>
	  	<div class="form-group">
			<label for="status"><?php _e('Status')?></label>
			<div>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_info" <?php _e( get_option('support_info', 1)  == 1?"checked":"" )?> value="1"> <?php _e('Enable')?>
					<span></span>
				</label>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_info" <?php _e( get_option('support_info', 1)  == 0?"checked":"" )?> value="0"> <?php _e('Disable')?>
					<span></span>
				</label>
			</div>
		</div>

		<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Ticket Icons')?></h5>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="background_color"><?php _e('Background Color List Icon')?></label>
					<input type="text" class="form-control" id="support_back_color_list_icon" name="support_back_color_list_icon" value="<?php _e(get_option('support_back_color_list_icon', '7D7D7D'))?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="text_color"><?php _e('Text Color List Icon')?></label>
					<input type="text" class="form-control" id="support_text_color_list_icon" name="support_text_color_list_icon" value="<?php _e(get_option('support_text_color_list_icon', 'FFFFFF'))?>">
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="background_color"><?php _e('Background Color Message Icon')?></label>
					<input type="text" class="form-control" id="support_back_color_icon" name="support_back_color_icon" value="<?php _e(get_option('support_back_color_icon', '3CDE90'))?>">
				</div>
			</div>
			<div class="col-md-6">	
				<div class="form-group">
					<label for="text_color"><?php _e('Text Color Message Icon')?></label>
					<input type="text" class="form-control" id="support_text_color_icon" name="support_text_color_icon" value="<?php _e(get_option('support_text_color_icon', 'FFFFFF'))?>">
				</div>
			</div>
		</div>

		<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Frequent Questions')?></h5>
	  	<div class="form-group">
			<label for="status"><?php _e('Status')?></label>
			<div>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_faqs" <?php _e( get_option('support_faqs', 1)  == 1?"checked":"" )?> value="1"> <?php _e('Enable')?>
					<span></span>
				</label>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_faqs" <?php _e( get_option('support_faqs', 1)  == 0?"checked":"" )?> value="0"> <?php _e('Disable')?>
					<span></span>
				</label>
			</div>
		</div>

		<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Email notifications')?></h5>
	  	<div class="form-group">
			<label for="status"><?php _e('Receive email when they create a Ticket')?></label>
			<div>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_email_create" <?php _e( get_option('support_email_create', 1)  == 1?"checked":"" )?> value="1"> <?php _e('Enable')?>
					<span></span>
				</label>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_email_create" <?php _e( get_option('support_email_create', 1)  == 0?"checked":"" )?> value="0"> <?php _e('Disable')?>
					<span></span>
				</label>
			</div>
		</div>

		<div class="form-group">
			<label for="status"><?php _e('Receive email when they respond to a Ticket')?></label>
			<div>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_email_reply" <?php _e( get_option('support_email_reply', 1)  == 1?"checked":"" )?> value="1"> <?php _e('Enable')?>
					<span></span>
				</label>
				<label class="i-radio i-radio--tick i-radio--brand m-r-10">
					<input type="radio" name="support_email_reply" <?php _e( get_option('support_email_reply', 1)  == 0?"checked":"" )?> value="0"> <?php _e('Disable')?>
					<span></span>
				</label>
			</div>
		</div>

		<div class="form-group">
	        <label for="text_color"><?php _e('Enter Email Address for Notifications')?></label>
	        <input type="text" class="form-control" id="support_email" name="support_email" value="<?php _e(get_option('support_email', ''))?>">
		</div>

		<div class="alert alert-solid-brand m-t-30">
			<?php _e("You can use following template tags within the message template:")?><br/>
			<?php _e("{full_name} - displays the user's fullname")?><br/>
			<?php _e("{email} - displays the user's email")?><br/>
			<?php _e("{website_name} - displays website_name")?><br/>
			<?php _e("{website_link} - get link website")?><br/>
			<?php _e("{support_link} - get link ticket")?><br/>
			<?php _e("{text_ticket} - get ticket message")?><br/>
			<?php _e("{id_ticket} - get ticket id")?><br/>
		</div>

		<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Email - New Ticket')?></h5>
  		<div class="form-group">
	        <label for="email_support_create_subject"><?php _e('Subject')?></label>
	        <input type="text" class="form-control" id="email_support_create_subject" name="email_support_create_subject" value="<?php _e(get_option('email_support_create_subject', '#{id_ticket} New Tiket! {full_name} it needs your help.'))?>">
	  	</div>
	  	<div class="form-group">
	        <label for="email_support_create_content"><?php _e('Content')?></label>
			<textarea class="form-control h-200" name="email_support_create_content" id="email_support_create_content"><?php _e(get_option('email_support_create_content', '<p><strong>Hello {full_name} has created a new ticket in {website_name}.</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href="{support_link}">{support_link}</a></p>'), false)?></textarea>
	  	</div>

	  	<h5 class="fs-16 fw-4 text-info m-b-20 m-t-30"><i class="fas fa-caret-right"></i> <?php _e('Email - Reply Ticket')?></h5>
  		<div class="form-group">
	        <label for="email_support_reply_subject"><?php _e('Subject')?></label>
	        <input type="text" class="form-control" id="email_support_reply_subject" name="email_support_reply_subject" value="<?php _e(get_option('email_support_reply_subject', '#{id_ticket} {full_name} has answered the ticket!'))?>">
	  	</div>
	  	<div class="form-group">
	        <label for="email_support_reply_content"><?php _e('Content')?></label>
			<textarea class="form-control h-200" name="email_support_reply_content" id="email_support_reply_content"><?php _e(get_option('email_support_reply_content', '<p><strong>Hello, {full_name} has answered the ticket!</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href="{support_link}">{support_link}</a></p>'), false)?></textarea>
	  	</div>

	</div>
  	<button type="submit" class="btn btn-info"><?php _e('Submit')?></button>

<script type="text/javascript">
$(function(){
	Core.CKEditor("email_support_create_content");
	Core.CKEditor("email_support_reply_content");
});
</script>