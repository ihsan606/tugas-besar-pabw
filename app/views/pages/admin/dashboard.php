<div class="container-fill">
  <!-- Laporan Pendapatan -->
  <div class="row">
    <div class="col-md-9 pb-0 mb-0 d-flex">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center"><i class="material-icons">Pendapatan Bulanan Tahun 2021</i></h3>
          <canvas id="chartMonth"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-12">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Pendapatan Hari Ini</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_hari_ini'] ?></h3>
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
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_minggu_ini'] ?></h3>
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
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_bulan_ini'] ?></h3>
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
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_tahun_ini'] ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-info py-4 px-4 mfe-3">
            <i class="fas fa-circle-notch fa-spin fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-info font-weight-bold"><?= $data['pending'] ?> TRANSAKSI</div>
            <div class="text-info title text-uppercase font-weight-bold">PENDING</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-success py-4 px-4 mfe-3">
            <i class="fas fa-check-square fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-success font-weight-bold"><?= $data['success'] ?> TRANSAKSI</div>
            <div class="text-success text-uppercase font-weight-bold">BERHASIL</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-warning py-4 px-4 mfe-3">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-warning font-weight-bold"><?= $data['expired'] ?> TRANSAKSI</div>
            <div class="text-warning text-uppercase font-weight-bold">KEDALUWARSA</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-danger py-4 px-4 mfe-3">
            <i class="fas fa-times-circle fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-danger font-weight-bold"><?= $data['failed'] ?> TRANSAKSI</div>
            <div class="text-danger text-uppercase font-weight-bold">GAGAL</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="card card-tasks">
        <div class="card-header">
          <h5 class="card-category">Completed Tasks</h5>
          <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th class="text-center" width = "30px"><p class="title">No</p></th>
                <th class="text-center" width = "80px"><p class="title">Gambar</p></th>
                <th class="text-left" width = "200px"><p class="title">Nama Menu</p></th>
                <th class="text-center" width = "80px"><p class="title">Terjual</p></th>
                <th class="text-center" width = "80px"><p class="title">Rating</p></th>
                <th class="text-right"><p class="title"></p></th>
                <th class="text-center" width = "100px"><p class="title">Review</p></th>
              </tr>
            </thead>
          </table>
          <div class="table-full-width table-responsive" style="border-collapse:collapse;">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center py-0" width = "30px"><p></p></th>
                  <th class="text-center py-0" width = "80px"><p></p></th>
                  <th class="text-left py-0" width = "200px"><p></p></th>
                  <th class="text-center py-0" width = "80px"><p></p></th>
                  <th class="text-center py-0" width = "80px"><p></p></th>
                  <th class="text-right py-0"><p></p></th>
                  <th class="text-center py-0" width = "100px"><p></p></th>
                  </tr>
                <tr>
              </thead>
              <tbody>
                <!-- buat perulangan untuk menampilkan laporan menu -->
                <?php 
                $menus = $data['menus'];
                $url = BASEURL;
                for($i = 0; $i < count($menus); $i++){
                  $menu = $menus[$i];
                  $no = $i + 1; 
                  echo "
                    <tr>
                      <td><p class='text-center'>$no</p></td>
                      <td class='text-center'><img src='$url/img/menus/$menu->image' alt='' height = '40px' width = '40px'></td>
                      <td><p>$menu->title</p></td>
                      <td><p class='text-center'>$menu->sold</p></td>
                      <td><p class='text-center'>$menu->rating</p></td>
                      <td></td>
                      <td class='text-center'><h2 style='margin-bottom: 0;'><i class='bi-caret-down-fill text-mute accordion-toggle' data-toggle='collapse' data-target='#demo$no'></i></h2></td>
                    </tr>
                    <tr>
                      <td colspan='12' class='py-0 hiddenRow'>
                        <div class='accordion accordion-flush collapse mx-4' id='demo$no'>
                          <div class='accordion-item'>
                  ";

                  for ($j = 0; $j < 3; $j++){
                    echo"
                      <h5>Orang ke-$j</h5>
                      <p>Prosesnya cepat, harga terjangkau, recomended</p>
                      <br>
                    ";
                  }

                  echo"
                          </div>
                        </div>
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
    </div>
    <div class="col-lg-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Daily Sales</h5>
          <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
        </div>
        <div class="card-body">
          
        </div>
      </div>
    </div>
  </div>
</div>  


