<div class="payment-coupon">
	<?php
	$coupon_code = "";
	if(_s("coupon")){
	    $coupon = (object)_s("coupon");
	    $coupon_code = $coupon->code;
	}
	?>
    <form class="actionForm" action="<?php _e( get_url("coupon_manager/ajax_verify") )?>" data-redirect="">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php _e("Coupon code")?>" name="code" aria-describedby="basic-addon2" value="<?php _e( $coupon_code )?>">
            <input type="hidden" name="package" value="<?php _e( $package_id )?>">
            <span class="input-group-append">
                <?php if( $coupon_code != ""){?>
                <a href="<?php _e( get_url("coupon_manager/ajax_remove") )?>" class="btn btn-danger actionItem" id="<?php _e( $coupon_code )?>" data-redirect="">
                	<i class="fas fa-times"></i>
                </a>
                <?php }?>
                <button class="btn btn-dark" type="submit"><?php _e("Submit")?></button>
            </span>
        </div>
    </form>
</div>