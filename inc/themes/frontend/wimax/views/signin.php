<?php include "top.php"?>
<body class="login-bg">
<!-- Register Area-->
<div class="col-md-6 col-xl-5 offset-xl-1" style="margin :10%"> 
    <div id="hero-4-form">
        <div class="hero-logo-sm mb-20"> 
      <!-- Logo--><a class="" href="<?php _e( get_url() )?>"><img class="img-fluid" src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a>
      <hr>
      <h5><?php _e("New to Cloud Panel ? ")?><a href="<?php _e( get_url("signup") )?>"><?php _e("Register Now")?></a></h5><br>
      <!-- Form-->
      <div class="register-form">
        <form action="<?php _e( get_module_url("ajax_login", $this) )?>" class="actionLogin" method="post" data-redirect="<?php _e( post('redirect')?post('redirect'):get_url('dashboard') )?>">
          <div class="form-group"><i class="lni-user"></i>
            <input class="form-control" type="text" name="email" placeholder="<?php _e("Enter your Email Id")?>">
          </div><br>
          <div class="form-group"><i class="lni-lock"></i>
            <input class="form-control" type="password" name="password" placeholder="<?php _e("Enter your Password")?>">
          </div>

          <?php if(get_option('google_recaptcha_status', 0)){?>
          <div class="g-recaptcha m-b-15" data-sitekey="<?=get_option('google_recaptcha_site_key', '')?>"></div>
          <?php }?>
          <br>
          <div class="custom-control custom-checkbox mb-3 mr-sm-2">
            <input class="custom-control-input" id="rememberMe" name="remember" type="checkbox">
            <label class="custom-control-label" for="rememberMe"><?php _e("Keep me logged in")?></label>
          </div>

          
          <button class="btn btn-sm btn-tra-grey tra-green-hover" type="submit"><?php _e("Log In")?></button><a class="forgot-password" href="<?php _e( get_url("forgot_password") )?>"><?php _e("Forgot Password?")?></a>
          <br>
          <span class="show-message"></span>
        </form>
      </div>
      <?php if( get_option('facebook_login_status', 0) || get_option('google_login_status', 0) || get_option('twitter_login_status', 0) ){?>
      <!-- Sign in via others-->
      <div class="signin-via-others">
        <p><?php _e("Or Log in with")?></p>

          <?php if( get_option('google_login_status', 0) ){?>
          <a class="btn wimax-btn btn-4 w-100 mt-15 btn-google" href="<?php _e( get_url("login/google") )?>">
            <img src="<?php _e( get_theme_frontend_url('assets/img/core-img/google-logo.png'))?>"> <?php _e("Log in with Google")?>
          </a>
          <?php }?>
          <?php if( get_option('facebook_login_status', 0) ){?>
          <a class="btn wimax-btn btn-4 w-100 mt-15 btn-facebook" href="<?php _e( get_url("login/facebook") )?>">
            <i class="fa fa-facebook"> </i> <?php _e("Log in with Facebook")?>
          </a>
          <?php }?>
          <?php if( get_option('twitter_login_status', 0) ){?>
          <a class="btn wimax-btn btn-4 w-100 mt-15 btn-twitter" href="<?php _e( get_url("login/twitter") )?>">
            <i class="fa fa-twitter"> </i> <?php _e("Log in with Twitter")?>
          </a>
          <?php }?>
      </div>
      <?php }?>
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