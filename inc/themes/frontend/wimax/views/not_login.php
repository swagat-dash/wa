<?php include "top.php"?>
<?php include "header.php"?>



<div class="container col-xxl-8 px-4 py-5 mt-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php _e( get_theme_frontend_url('assets/img/bg-img/error_lg.svg'))?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3" style="color: var(--danger); text-transform: uppercase;"><?php echo $msg->status ?>:</h1>
        <p class="lead">Usted ha intentado iniciar sesión mediante el botón de inicio de un solo toque, se ha presentado el siguiente error:</p>
        <p class="lead" style="font-style: italic!important;"><?php echo $msg->message ?></p>
        <p class="lead">Póngase en contacto con el administrador del sístema o genere un ticket agregando una captura de pantalla del error.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">volver al inicio</button>
        </div>
      </div>
    </div>
  </div>

<?php include "bottom.php"?>