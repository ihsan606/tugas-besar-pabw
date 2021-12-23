<?php 
if(!isset($_SESSION['login'])){
  header('location:'. BASEURL. '/admin/login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL; ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= BASEURL; ?>/assets/img/favicon.png">
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= BASEURL; ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= BASEURL; ?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= BASEURL; ?>/assets/demo/demo.css" rel="stylesheet" />

  <!-- Sweet Alert -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- Title -->
  <title>Rezerva | Admin | <?= $data['title']?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/dashboard.css">
  
</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red" -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <h3 style='margin : 0px 0px 0px 0px; padding : 0px 0px 0px 10px;'>
            <a href="javascript:void(0)" class="simple-text logo-mini" style='margin : 0px 10px 0px 0px;'><i class="bi-slack" role="img" aria-label="Slack"></i></a>
            <a href="javascript:void(0)" class="simple-text logo-normal">REZERVA</a>
          </h3>
        </div>
        <ul class="nav">
          <li>
            <a href="<?=BASEURL;?>/admin/dashboard">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/daftar_pesanan">
              <i class="tim-icons icon-atom"></i>
              <p>Daftar Pesanan</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/laporan_pendapatan">
              <i class="tim-icons icon-pin"></i>
              <p>Laporan Pendapatan</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/laporan_menu">
              <i class="tim-icons icon-bell-55"></i>
              <p>Laporan Menu</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/kelola_menu">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Kelola Menu</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/kelola_kategori">
              <i class="tim-icons icon-single-02"></i>
              <p>Kelola Kategori</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/kelola_admin">
              <i class="tim-icons icon-align-center"></i>
              <p>Kelola Admin</p>
            </a>
          </li>
          <li>
            <a href="<?=BASEURL;?>/admin/login/logout">
              <i class="tim-icons icon-button-power"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" data="blue">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent mt-2">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand " style='margin : 0px 0px 0px 0px; padding : 0px 0px 0px 20px;' href="javascript:void(0)"><h2 style='margin : 0px 0px 0px 0px;'><?= $data['title']?></h2></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item" style="vertical-align: middle!important; height: 100%;">
                <h3 class="my-0"><?=$_SESSION['admin']?></h3>
              <li class="dropdown nav-item" style="vertical-align: middle!important; height: 100%;">
                <div class="photo">
                  <img src="<?=BASEURL;?>/assets/img/anime3.png" alt="Profile Photo">
                </div>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content pb-0">
        