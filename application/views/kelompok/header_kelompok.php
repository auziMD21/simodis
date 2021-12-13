<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Riau Pos Intermedia</title>

  <!-- ========== Css Files ========== -->
  <link href="<?= base_url() ?>assets/templates/css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="<?= base_url() ?>assets/templates/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

  	<!-- Start App Logo -->
  	<div class="applogo">
  		<a href="<?= base_url() ?>kelompok/" class="logo">Riau Pos<label style="color: red">.co</label></a>
  	</div>
  	<!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <!-- End Top Menu -->

    <!-- Start Top Right -->
    <ul class="top-right">
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="<?= base_url() ?>assets/templates/img/profileimg.png" alt="img"><b></b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
            <li><a href="<?= base_url()?>/kelompok/logout"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>   </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">Kelompok</li>
  <li><a href="<?= base_url() ?>kelompok/home"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="<?= base_url() ?>kelompok/profil"><span class="icon color6"><i class="fa fa-user"></i></span>Profil</a></li>
  <li><a href="<?= base_url() ?>kelompok/pembaca"><span class="icon color7"><i class="fa fa-group"></i></span>Pembaca</a>
  </li>
</ul>
</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>kelompok">Dashboard</a></li>
        <li><a href="#">Admin</a></li>
      </ol>

    <!-- Start Page Header Right Div -->
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->
