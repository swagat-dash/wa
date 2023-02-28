<?php
$allow_packages = json_decode( get_data($result, 'packages') );
?>

<div class="subheadline wrap-m">
	
	<div class="sh-main wrap-c">
		<div class="sh-title text-info fs-18 fw-5"><i class="far fa-edit"></i> <?php _e('Update')?></div>
	</div>
	<div class="sh-toolbar wrap-c">
		<div class="btn-group" role="group">
	    	<a 
	    		class="btn btn-label-info actionItem" 
	    		data-result="html" 
	    		data-content="column-two"
	    		data-history="<?php _e( get_module_url() )?>" 
	    		data-call-after="Layout.inactive_subsidebar();" 
	    		href="<?php _e( get_module_url() )?>"
	    	>
	    		<i class="fas fa-chevron-left"></i> <?php _e('Back')?>
	    	</a>
		</div>
	</div>

</div>

<div class="m-t-10">
	<form class="actionForm" action="<?php _e( get_module_url( 'save/'.segment(4) ) )?>" data-redirect="<?php _e( get_module_url() )?>">
		
		<div class="row">
			<div class="col-md-6">
				<form>
					<div class="form-group">
				    	<label for="status"><?php _e('Status')?></label>
				    	<div>
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
				  	<div class="form-group">
				    	<label for="type"><?php _e('Type')?></label>
				    	<div>
				    		<label class="i-radio i-radio--tick i-radio--brand m-r-10">
								<input type="radio" name="type" checked="true" value="0" <?php _e( get_data($result, 'type', 'radio', 0) )?> > <?php _e('Percent')?>
								<span></span>
							</label>
							<label class="i-radio i-radio--tick i-radio--brand m-r-10">
								<input type="radio" name="type" value="1" <?php _e( get_data($result, 'type', 'radio', 1) )?> > <?php _e('Price')?>
								<span></span>
							</label>
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="packages"><?php _e('Packages')?></label>
				    	<div>
				    		<?php if(!empty($packages)){
				    			foreach ($packages as $package) {
				    		?>
				    		<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-r-10">
								<input type="checkbox" name="packages[]" value="<?php _e( $package->id )?>" <?php _e( (!empty( $allow_packages ) && in_array($package->id, $allow_packages ))?"checked":"" )?> > <?php _e( $package->name )?>
								<span></span>
							</label>
							<?php }}?>
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="name"><?php _e('Name')?></label>
				    	<input type="text" class="form-control" id="name" name="name" value="<?php _e( get_data($result, 'name') )?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="code"><?php _e('Code')?></label>
				    	<input type="text" class="form-control" id="code" name="code" value="<?php _e( get_data($result, 'code') )?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="price"><?php _e('Price')?></label>
				    	<input type="number" class="form-control" id="price" name="price" value="<?php _e( get_data($result, 'price') )?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="expiration_date"><?php _e('Expiration date')?></label>
				    	<input type="text" class="form-control datetime" id="expiration_date" name="expiration_date" value="<?php _e( datetime_show( get_data($result, 'expiration_date') ) )?>">
				  	</div>
				  	
				  	<button type="submit" class="btn btn-primary"><?php _e('Submit')?></button>
				</form>
			</div>
		</div>

	</form>

</div>