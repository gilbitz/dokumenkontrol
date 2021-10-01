<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mitra Sinergi Telematika<?php if (isset($title)) {
    echo " - " . $title;
}
?></title>

    <!-- plugins:css -->
   <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/typicons/typicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/select2/select2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/icheck/all.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/vendors/dropify/dropify.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/public/css/jquery.auto-complete.css') ?>" />
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/shared/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/staradmin/src/assets/css/demo_1/style.css') ?>">
    <script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/js/vendor.bundle.base.js')?>"></script>
<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/pdfobject/pdfobject.min.js')?>"></script>
  <!-- endinject -->
	<script>
		var base_url = '<?php echo base_url(); ?>';
		var site_url = '<?php echo site_url(); ?>';
	</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url('/public/logo.png') ?>" rel="icon" />

  <style>
.pdfobject-container {  width: 100%; height: 35rem; background: #333; border: solid 2px; }
</style>
</head>

<body>
<div class="container-scroller">

    <!-- Navigation -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo text-light" href="<?php echo site_url('/home'); ?>">
           Dokumen Misitel</a>
          <a class="navbar-brand brand-logo-mini text-light" href="<?php echo site_url('/home'); ?>">
          DOK</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/home'); ?>">Home</a>
            </li>
             
            </ul>

                <!-- SEARCH FORM -->
                <form class="ml-auto search-form d-none d-md-block" method="get" action="<?php echo site_url('/home/search'); ?>">
                    <div class="input-group">
                        <input name="katakunci" class="form-control" type="search" placeholder="nomor arsip/kata kunci uraian" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        </div>
                    </div>
                    </form>
    
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                    <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['username'];?></p>
                    <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['tipe'];?></p>
                    </div>
					
                    <a class="dropdown-item" href="<?php echo site_url('home/logout');?>"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Logout</a>
                </div>
                </li>
				</ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
                </button>
        </div>
        <!-- /.container -->
    </nav>

    <!-- page-body-wrapper -->
    <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/home'); ?>">
                <i class="menu-icon mdi mdi-home"></i>
                <span class="menu-title">Home</span>
              </a>
            </li>
            <?php if (isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata'] == 'on') {
                        echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/admin/entr') . '"><i class="menu-icon mdi mdi-file-document-box-plus"></i> <span class="menu-title">Entri Baru</span></a></li>';
                    }
                    ?>

            <?php if (isset($_SESSION['akses_modul']['sirkulasi']) && $_SESSION['akses_modul']['sirkulasi'] == 'on') {
                        echo '<li class="nav-item"><a class="nav-link" href="' . site_url('/sirkulasi') . '"><i class="menu-icon mdi mdi-swap-horizontal-bold"></i> <span class="menu-title">Sirkulasi</span></a></li>';
                    }?>
            <?php      
                    if ($_SESSION['menu_master']) {
                         echo '<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#data-master" aria-expanded="false" aria-controls="data-master">
                            <i class="menu-icon mdi mdi-wrench"></i>
                            <span class="menu-title">Admin Master</span><i class="menu-arrow"></i></a>
                            <div class="collapse" id="data-master">
                            <ul class="nav flex-column sub-menu">';
                        if (isset($_SESSION['akses_modul']['klasifikasi']) && $_SESSION['akses_modul']['klasifikasi'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/klas') . "\"><i class=\"fa fa-tag\"></i>&nbsp; Klasifikasi</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['pencipta']) && $_SESSION['akses_modul']['pencipta'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/penc') . "\"><i class=\"fa fa-home\"></i>&nbsp; Pencipta arsip</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['pengolah']) && $_SESSION['akses_modul']['pengolah'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/pengolah') . "\"><i class=\"fa fa-home\"></i>&nbsp; Unit Pengolah & Pengontrol</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['lokasi']) && $_SESSION['akses_modul']['lokasi'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/lokasi') . "\"><i class=\"fa fa-map-marker\"></i>&nbsp; Lokasi</a></li>";
                        }
                        if (isset($_SESSION['akses_modul']['media']) && $_SESSION['akses_modul']['media'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/media') . "\"><i class=\"fa fa-film\"></i>&nbsp; Media</a></li>";
                        }               

                        echo "</ul></div>
                        </li>";
                    }
                ?>
            <?php if (isset($_SESSION['akses_modul']['user']) && $_SESSION['akses_modul']['user'] == 'on') {
                            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . site_url('admin/vuser') . "\"><i class=\"menu-icon mdi mdi-account-multiple\"></i> <span class=\"menu-title\">Pengguna</span></a></li>";
                        }
                        ?>
            }
            ?>
            </ul>
        </nav>

     <!-- main-panel -->
	<div class="main-panel">
        <!-- content-wrapper -->
        <div class="content-wrapper">
    