<?php include "top.php"?>
<body class="login-bg">
<!-- Register Area-->
<div class="col-md-6 col-xl-5 offset-xl-1" style="margin :10%"> 
    <div id="hero-4-form">
        <div class="hero-logo-sm mb-20"> 
      <!-- Logo--><a class="" href="<?php _e( get_url() )?>"><img class="img-fluid" src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a>
      <hr>
      <h5><?php _e("Forgot Password ? ")?></h5><br>
      <!-- Form-->
      <div class="register-form">
        <form action="<?php _e( get_module_url("ajax_forgot_password", $this) )?>" class="actionLogin" method="post" data-redirect="<?php _e( post('redirect')?post('redirect'):get_url('login') )?>">
          <div class="form-group"><i class="lni-user"></i>
            <input class="form-control" type="text" name="email" placeholder="<?php _e("Email Address")?>">
          </div>
          <?php if(get_option('google_recaptcha_status', 0)){?>
          <div class="g-recaptcha m-b-15" data-sitekey="<?=get_option('google_recaptcha_site_key', '')?>"></div>
          <?php }?>

          <span class="show-message"></span>
          <br>
          <button class="btn btn-sm btn-tra-grey tra-green-hover" type="submit"><?php _e("Log In")?></button>
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