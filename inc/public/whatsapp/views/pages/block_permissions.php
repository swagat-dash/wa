<div class="form-group">
	<label class="fw-6 text-info"><?php _e('Features')?></label>
	<div>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_profile]" <?php _e( permission('checkbox', 'whatsapp_profile')  == 1?"checked":"" )?> value="1"> <?php _e('Profile')?>
			<span></span>
		</label>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_autoresponder]" <?php _e( permission('checkbox', 'whatsapp_autoresponder')  == 1?"checked":"" )?> value="1"> <?php _e('Autoresponder')?>
			<span></span>
		</label>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_bulk]" <?php _e( permission('checkbox', 'whatsapp_bulk')  == 1?"checked":"" )?> value="1"> <?php _e('Bulk messaging')?>
			<span></span>
		</label>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_chatbot]" <?php _e( permission('checkbox', 'whatsapp_chatbot')  == 1?"checked":"" )?> value="1"> <?php _e('Chatbot')?>
			<span></span>
		</label>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_export_participants]" <?php _e( permission('checkbox', 'whatsapp_export_participants')  == 1?"checked":"" )?> value="1"> <?php _e('Export participants in a group')?>
			<span></span>
		</label>
		
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_link_generator]" <?php _e( permission('checkbox', 'whatsapp_link_generator')  == 1?"checked":"" )?> value="1"> <?php _e('Link Generator')?>
			<span></span>
		</label>
		
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_api]" <?php _e( permission('checkbox', 'whatsapp_api')  == 1?"checked":"" )?> value="1"> <?php _e('REST API')?>
			<span></span>
		</label>
		
	</div>
</div>
<div class="form-group">
	<label class="fw-6 text-info"><?php _e('Autoresponder permissions')?></label>
	<div class="m-b-10">
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_autoresponder_media]" <?php _e( permission('checkbox', 'whatsapp_autoresponder_media')  == 1?"checked":"" )?> value="1"> <?php _e('Autoresponder with media')?>
			<span></span>
		</label>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group m-b-0">
				<label for="whatsapp_autoresponder_delay"><?php _e('Minimum number of minutes to choose autoresponder delay')?></label>
				<input type="text" class="form-control" name="permissions[whatsapp_autoresponder_delay]" value="<?php _e( (int)permission('text', 'whatsapp_autoresponder_delay') )?>">
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="fw-6 text-info"><?php _e('Bulk message permissions')?></label>
	
	<div class="m-b-10">
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_bulk_media]" <?php _e( permission('checkbox', 'whatsapp_bulk_media')  == 1?"checked":"" )?> value="1"> <?php _e('Bulk messaging with media')?>
			<span></span>
		</label>
	</div>
	

    	<div class="m-b-10">
    		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
    			<input type="checkbox" name="permissions[whatsapp_bulk_rotator]" <?php _e( permission('checkbox', 'whatsapp_bulk_rotator')  == 1?"checked":"" )?> value="1"> <?php _e('Bulk Rotator Phone')?>
    			<span></span>
    		</label>
    	</div>
    	<div class="m-b-10">
    		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
    			<input type="checkbox" name="permissions[whatsapp_bulk_report]" <?php _e( permission('checkbox', 'whatsapp_bulk_report')  == 1?"checked":"" )?> value="1"> <?php _e('Bulk Reports')?>
    			<span></span>
    		</label>
    	</div>
    
	
	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="whatsapp_bulk_max_contact_group"><?php _e('The maximum number of contact groups')?></label>
				<input type="text" class="form-control" name="permissions[whatsapp_bulk_max_contact_group]" value="<?php _e( (int)permission('text', 'whatsapp_bulk_max_contact_group') )?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group m-b-0">
				<label for="whatsapp_bulk_max_phone_numbers"><?php _e('The maximum number of numbers that can be added to the contact group')?></label>
				<input type="text" class="form-control" name="permissions[whatsapp_bulk_max_phone_numbers]" value="<?php _e( (int)permission('text', 'whatsapp_bulk_max_phone_numbers') )?>">
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="fw-6 text-info"><?php _e('Chatbot permissions')?></label>
	<div>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_chatbot_media]" <?php _e( permission('checkbox', 'whatsapp_chatbot_media')  == 1?"checked":"" )?> value="1"> <?php _e('Chatbot with media')?>
			<span></span>
		</label>
	</div>
</div>
<div class="form-group">
	<label class="fw-6 text-info"><?php _e('Button template')?></label>
	<div>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_button_status]" <?php _e( permission('checkbox', 'whatsapp_button_status')  == 1?"checked":"" )?> value="1"> <?php _e('Enable/Disable')?>
			<span></span>
		</label>
	</div>
</div>
<div class="form-group">
	<label class="fw-6 text-info"><?php _e('List message template')?></label>
	<div>
		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
			<input type="checkbox" name="permissions[whatsapp_list_message_status]" <?php _e( permission('checkbox', 'whatsapp_list_message_status')  == 1?"checked":"" )?> value="1"> <?php _e('Enable/Disable')?>
			<span></span>
		</label>
	</div>
</div>






<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="whatsapp_message_per_day"><?php _e('Total number of messages/month')?></label>
			<div class="fs-12 text-info"><?php _e("Include the total number of messages sent by Bulk messages, Auto response, Chatbot")?></div>
			<input type="text" class="form-control" name="permissions[whatsapp_message_per_day]" value="<?php _e( (int)permission('text', 'whatsapp_message_per_day') )?>">
		</div>
	</div>
</div>