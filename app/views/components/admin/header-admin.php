<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=BASEURL;?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=BASEURL;?>/assets/img/favicon.png">
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?=BASEURL;?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?=BASEURL;?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=BASEURL;?>/assets/demo/demo.css" rel="stylesheet" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- Title -->
  <title>Rezerva | Admin | <?= $data['title']?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/dashboard.css">
  
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
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
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
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
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="<?=BASEURL;?>/assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content pb-0">
        