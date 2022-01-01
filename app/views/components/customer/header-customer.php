<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="img/uq.png" width="50" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= BASEURL; ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- local css style -->
  <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/assets/css/custom.css">

  <title>Rezerva | Customer | <?= $data['title']; ?></title>

  <!-- Sweet Alert -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <!-- snap pay configuration -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-_0bji155hJ_YL7Pw"></script>
</head>

<body style="background-color: #FDFEFE;">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-height: 10vh!important;">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="<?= BASEURL; ?>/customer/home">
        REZERVA
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/customer/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/customer/daftar_menu">Menu</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php 
            foreach($data['data_categories'] as $category){
              $url = BASEURL;
              echo <<<TEXT
                <li>
                  <a class='dropdown-item' href='$url/customer/daftar_menu/show/$category->slug'>
                    <h6><img src='$url/img/categories/$category->image' width='50' style='margin-right: 10px;'>$category->name</h6>
                  </a>
                </li>
              TEXT;
            }
            ?>
          </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            KATEGORI
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            // foreach($data['data_categories'] as $category){
            //   $url = BASEURL;
            //   echo"
            //     <li>
            //       <a class='dropdown-item' href='$url/customer/daftar_menu/show/$category->slug'>
            //         <img src='$url/img/categories/$category->image' width='50'>$category->name
            //       </a>
            //     </li>
            //   ";
            // }
            ?>
          </ul>
        </li> -->
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <a href="<?= BASEURL; ?>/customer/keranjang" type="button" class="btn btn-success" style="font-size: 14px; min-width: auto;">
        Keranjang <span class="badge bg-white" style="color: #0d6efd; font-size: 12px; font-weight: 600;">
          <?php
          if (isset($_SESSION['keranjang']['menus'])) {
            echo count($_SESSION['keranjang']['menus']);
          } else {
            echo 0;
          }
          ?>
        </span>
      </a>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

  <div class="container py-4" align="start" style="min-height: 80vh!important;">