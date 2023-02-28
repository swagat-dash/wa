<?php include "top.php"?>
<body class="login-bg">
    
<!-- Register Area-->
<div class="col-md-6 col-xl-5 offset-xl-1" style="margin :10%"> 
    <div id="hero-4-form">
        <div class="hero-logo-sm mb-20"> 
      <!-- Logo--><a class="" href="<?php _e( get_url() )?>"><img class="img-fluid" src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a>
      <hr>
      <h5><?php _e("Already have Account with us ? ")?><a href="<?php _e( get_url("login") )?>"><?php _e("Login Now")?></a></h5><br>
      <!-- Form-->
      <div class="register-form">
       <form class="actionLogin" action="<?php _e( get_module_url('ajax_signup', $this) )?>" method="post" data-redirect="<?php _e( get_url('login') )?>">
          <div class="form-group"><i class="lni-user"></i>
            <input class="form-control" type="text" name="fullname" placeholder="<?php _e("Full Name")?>">
          </div><br>
          <div class="form-group"><i class="lni-envelope"></i>
            <input class="form-control" type="email" name="email" placeholder="<?php _e("Email Address")?>">
          </div><br>
          <div class="form-group"><i class="lni lni-phone"></i>
              <select name="code" id="code" class="form-control auto-select-cc">
                <?php if(!empty(cc_code())){
                foreach (cc_code() as $code => $name) {
                ?>
                <option value="<?php _e( $code )?>"><?php _e( $name )?></option>
                <?php }}?>
              </select>
          </div><br>
          <div class="form-group"><i class="lni-phone"></i>
            <input class="form-control" type="number" id="phone" onInput="edValueKeyPress()" name="number" placeholder="<?php _e("Phone Number")?>">
          </div><br>
<!--           <div class="form-group otp_section" style="display:none;" >
            <span id="phone_error"></span>
            <span ><a id="otpc" onClick="sendotp()" class="btn btn-sm btn-tra-grey tra-green-hover" style="">SEND OTP</a></span><br>
            <input class="form-control" id="otp_code_input" onInput="otp_code_verfication()" type="number" name="otp" placeholder="Enter OTP">
            <span id="verify_response"></span>
          </div><br> -->
          <div class="form-group"><i class="lni-lock"></i>
            <input class="form-control" type="password" name="password" placeholder="<?php _e("Password")?>">
          </div><br>
          <div class="form-group"><i class="lni-lock"></i>
            <input class="form-control" type="password" name="confirm_password" placeholder="<?php _e("Confirm password")?>">
          </div><br>
          <div class="form-group"><i class="lni lni-timer"></i>
              <select name="timezone" class="form-control auto-select-timezone">
                <?php if(!empty(tz_list())){
                foreach (tz_list() as $zone => $time) {
                ?>
                <option value="<?php _e( $zone )?>"><?php _e( $time )?></option>
                <?php }}?>
              </select>
          </div><br>

          <?php if(get_option('google_recaptcha_status', 0)){?>
          <div class="g-recaptcha m-b-15" data-sitekey="<?=get_option('google_recaptcha_site_key', '')?>"></div>
          <?php }?>

          <div class="custom-control custom-checkbox mb-3 mr-sm-2">
            <input class="custom-control-input" id="rememberMe" type="checkbox" name="terms">
            <label class="custom-control-label" for="rememberMe"><?php _e("Accept Terms & Conditions")?></label>
          </div><br>
         
          <button class="btn btn-sm btn-tra-grey tra-green-hover" type="submit"><?php _e("Register Now")?></button>
           <span class="show-message"></span>
        </form>
      </div>
     
     
    </div>
  </div>
  <!-- Register Side Content-->
 
</div>

<?php include "bottom.php"?>

<!-- jQuery(necessary for all JavaScript plugins)-->
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jquery.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/bootstrap.bundle.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/waypoints.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jquery.easing.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/classy-nav.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/sticky.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/one-page-nav.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jquery.magnific-popup.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/scrollup.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/owl.carousel.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jarallax.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jarallax-video.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jquery.counterup.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/jquery.countdown.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/wow.min.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/mail.js'))?>"></script>
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/wimax.js'))?>"></script>
<!-- All plugins activation code-->
<script src="<?php _e( get_theme_frontend_url('assets/js-wimax/default/active.js'))?>"></script>

</body>