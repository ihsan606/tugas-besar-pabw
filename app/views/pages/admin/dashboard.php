
<script src="<?= BASEURL; ?>/assets/demo/demo.js"></script>
  <div class="container-fill">
    <!-- Laporan Pendapatan -->
    <div class="row">
      <div class="col-md-8 pb-0 mb-0 d-flex">
        <!-- <div class="head-left">
          <div class="nama admin">
            <h2>Hai <?= "nama admin" ?></h2>
          </div>
          <div class="search">
            <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search">
          </div>
        </div> -->
        <!-- <div class="hero">
          <div class="px-4 py-5 my-1 text-center" id="hero">
            <i class="bi-slack" id="logo-rezerva" role="img" aria-label="Slack"></i>
            <img class="d-block mx-auto mb-4" src="" alt="logo rezerva" width="72" height="57">
            <h1 class="display-5 fw-bold">Welcome to Rezerva's dashboard</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Rezerva menawarkan fitur yang cukup menarik,silahkan eksplor dan jelajahi fitur yang ada</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-succes btn-lg px-4 gap-3">Transaksi</button>

              </div>
            </div>
          </div>
        </div> -->
        <div class="card card-chart">
          <div class="card-header">
            <div class="row ">
              <div class="col">
                <i> <h2 class="card-title">Pendapatan Bulanan</h2></i>
              </div>
            </div>
            <div class="chart pb-0">
              <div id="chart" class="card pb-0"></div>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="row justify-content-between align-items-center">
          <!-- <div class="col-md-12">
            <div class="card card-stats mb-3">
              <div class="card-header card-header-success card-header-icon">
                <i> <h2 class="card-title">Detail Pendapatan</h2></i>
              </div>
            </div>
          </div> -->
          <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">Pendapatan Hari Ini</i>
                </div>
                <p class="card-category">Total</p>
                <h3 class="card-title"><?=$data['pendapatan_hari_ini']?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">Pendapatan Minggu Ini</i>
                </div>
                <p class="card-category">Total</p>
                <h3 class="card-title"><?=$data['pendapatan_minggu_ini']?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">Pendapatan Bulan Ini</i>
                </div>
                <p class="card-category">Total</p>
                <h3 class="card-title"><?=$data['pendapatan_bulan_ini']?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">Pendapatan Tahun Ini</i>
                </div>
                <p class="card-category">Total</p>
                <h3 class="card-title"><?=$data['pendapatan_tahun_ini']?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>