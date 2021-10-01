<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- plugins:css -->
   <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/typicons/typicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>">
  <!-- endinject -->
  <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="container-scroller">
<div class="container-fluid page-body-wrapper full-page-wrapper">

<div class="content-wrapper auth p-0 theme-two">
  <div class="row d-flex align-items-stretch">
  <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
              <div class="slide-content bg-2"> </div>
            </div>
      
    <div class="col-12 col-md-8 h-100 bg-white" >
    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
      <div class="nav-get-started">
        
      </div>

      <form id="login" role="form" method="post" action="<?php echo site_url('/home/gologin'); ?>" style="margin-top: -100px;">
      <h3 class="mr-auto">Dokumen Kontrol</h3>
      <h3 class="mr-auto">PT. Mitra Sinergi Telematika</h3>
                  <p class="mb-4 mr-auto">Masuk untuk memulai sesi Anda.</p>
			<?php
			if($this->session->flashdata('erorlogin')) {
				echo "<div <div class=\"alert alert-danger\" role=\"alert\"><h5><i class=\"fa fa-exclamation-triangle\"></i> Perhatian!</h5>".$this->session->flashdata('erorlogin')."</div>";
			}
			?>
            <!--<input type="hidden" name="previous" value="<?php echo (isset($previous)?$previous:"") ?>">-->
            <div class="form-group">
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-outline"></i>
                        </span>
                      </div>
            <input type="text" class="form-control" name="username" id="loginEmail" placeholder="username"  autofocus>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-lock-outline"></i>
                        </span>
                      </div>
            <input type="password" class="form-control" name="password" id="loginPass" placeholder="sandi" >
            </div>
            </div>
            <div class="form-group">
            <button class="btn btn-lg btn-primary submit-btn" type="submit">Login</button>
            </div>
      </form>
    </div>
    </div>
	</div>
</div>
<!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/off-canvas.js')?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/hoverable-collapse.js')?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/misc.js')?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/settings.js')?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/js/shared/todolist.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>
</html>