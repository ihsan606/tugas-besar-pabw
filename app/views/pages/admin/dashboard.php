

  <div class="container-fill">
    <!-- Laporan Pendapatan -->
    <div class="row">
      <div class="col-md-8 pl-0 pb-0 mb-0 d-flex">
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
        <div class="card card-chart mb-3">
          <div class="card-header">
            <div class="row ">
              <div class="col" >
                <i> <h2 class="card-title">Pendapatan Bulanan</h2></i>
                <h5 class="card-category">Total</h5>
              </div>
            </div>
            <div class="card-body pb-0">
              <div class="chart">
                <div id="chart" class="card pb-0"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 px-0">
        <div class="row justify-content-between">
          <div class="col-md-12">
            <div class="card card-stats mb-3">
              <div class="card-header card-header-success card-header-icon">
                <i> <h2 class="card-title">Detail Pendapatan</h2></i>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-stats mb-3">
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
            <div class="card card-stats mb-3">
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
            <div class="card card-stats mb-3">
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
            <div class="card card-stats mb-3">
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

    <div class="row">
        <!-- daftar pesanan -->
        <div class="card" style="border-radius: 10px;">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>No meja</th>
                <th class="text-left">Daftar Menu</th>
                <th class="text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="table-striped">
              <tr>

                <td class="text-center">1</td>
                <td class="td-top">Devano</td>
                <td>1</td>
                <td class="text-right">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-left">no</th>
                        <th class="text-left">nama makanan</th>
                        <th class="text-left">jumlah</th>
                        <th class="text-center">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">Seafood Udang </td>
                        <td class="text-left">4</td>
                        <td class="text-center">Tidak pake nasi</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="tim-icons icon-single-02"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </td>
              </tr>
              <tr>

                <td class="text-center">1</td>
                <td class="td-top">Devano</td>
                <td>1</td>
                <td class="text-right">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-left">no</th>
                        <th class="text-left">nama makanan</th>
                        <th class="text-left">jumlah</th>
                        <th class="text-center">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">Seafood Udang </td>
                        <td class="text-left">4</td>
                        <td class="text-center">Tidak pake nasi</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="tim-icons icon-single-02"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </td>
              </tr>
              <tr>

                <td class="text-center">1</td>
                <td class="td-top">Devano</td>
                <td>1</td>
                <td class="text-right">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-left">no</th>
                        <th class="text-left">nama makanan</th>
                        <th class="text-left">jumlah</th>
                        <th class="text-center">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">Seafood Udang </td>
                        <td class="text-left">4</td>
                        <td class="text-center">Tidak pake nasi</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="tim-icons icon-single-02"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!-- laporan menu -->
        <div class="card card-tasks" style='height : 60vh;'>
          <div class="card-header ">
            <h3 style="margin : 0px 0px 0px 0px;">Laporan Menu</h3>
          </div>
          <div class="card-body">
            <div class="form-group-apend">
              <div class="row pb-3">
                <div class="col align-self-center pr-0">
                  <div class="input-group-prepended ">
                    <input type="text" class="form-control" placeholder="cari berdasarkan nama menu">
                  </div>
                </div>
                <div class="col-md-auto align-self-center">
                  <div class="input-group-apend">
                    <a class="btn btn-sm p-2 text-white"><i class="fa fa-search mr-2 text-white"></i>SEARCH</a>
                  </div>
                </div>
              </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center" width="20px">
                    <p class="title">No</p>
                  </th>
                  <th class="text-center" width="70px">
                    <p class="title">Gambar</p>
                  </th>
                  <th class="text-left">
                    <p class="title">Nama Menu</p>
                  </th>
                  <th class="text-left" width="200px">
                    <p class="title">Kategori</p>
                  </th>
                  <th class="text-center" width="60px">
                    <p class="title">Terjual</p>
                  </th>
                  <th class="text-center" width="60px">
                    <p class="title">Rating</p>
                  </th>
                </tr>
              </thead>
            </table>
            <div class="table-full-width table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center" width="20px">
                      </p>
                    </th>
                    <th class="text-center" width="70px">
                      </p>
                    </th>
                    <th class="text-left">
                      </p>
                    </th>
                    <th class="text-left" width="200px">
                      </p>
                    </th>
                    <th class="text-center" width="60px">
                      </p>
                    </th>
                    <th class="text-center" width="60px">
                      </p>
                    </th>
                  </tr>
                  <tr>
                </thead>
                <tbody>
                  <!-- buat perulangan untuk menampilkan laporan menu -->
                  <?php
                  for ($i = 1; $i < 31; $i++) {
                    echo "
              <tr>
                <td class='text-center'>
                  <p>$i</p>
                </td>
                <td class='text-center'>
                  <img src='' alt='' height = '40px' width = '40px'>
                </td>
                <td>
                  <p class='title'>Menu ke-$i</p>
                </td>
                <td>
                  <p class='title'>Kategori Menu ke-$i</p>
                </td>
                <td>
                  <p class='title text-center'>100</p>
                </td>
                <td>
                  <p class='title text-center'>5</p>
                </td>
              </tr>
            ";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        

        <!-- laporan pendapatan -->

      </div>
      
    </div>
  </div>