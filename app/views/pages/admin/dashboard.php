<?php

?>
<div class="content card p-4">
  <div class="container">


  </div>


  <div class="container-fill h-100 ">
    <div class="row">
      <div class="col-md-8 ">
        <div class="head-left">
          <div class="nama admin">
            <h2>Hai <?= "nama admin" ?></h2>
          </div>
          <div class="search">
            <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search">
          </div>
        </div>
        <div class="hero">
          <div class="px-4 py-5 my-1 text-center" id="hero">
            <i class="bi-slack" id="logo-rezerva" role="img" aria-label="Slack"></i>
            <!-- <img class="d-block mx-auto mb-4" src="" alt="logo rezerva" width="72" height="57"> -->
            <h1 class="display-5 fw-bold">Welcome to Rezerva's dashboard</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Rezerva menawarkan fitur yang cukup menarik,silahkan eksplor dan jelajahi fitur yang ada</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-succes btn-lg px-4 gap-3">Transaksi</button>

              </div>
            </div>
          </div>
        </div>
        <div class="button-penjualan text-center my-4" id="button-penjualan">
          <div class="button-penjualan-list">
            <div class="left-penjualan-list">
              <i class="tim-icons icon-money-coins"></i>
            </div>
            <div class="right-penjualan-list">
              <h4>Today's Lead</h4>
              <p>50</p>
            </div>

          </div>
          <div class="button-penjualan-list">
            <div class="left-penjualan-list">
              <i class="tim-icons icon-money-coins"></i>
            </div>
            <div class="right-penjualan-list">
              <h4>Penjualan Hari ini</h4>
              <p>150 porsi</p>
            </div>
          </div>
          <div class="button-penjualan-list">
            <div class="left-penjualan-list">
              <i class="tim-icons icon-money-coins"></i>
            </div>
            <div class="right-penjualan-list">
              <h4>Revenue Hari ini</h4>
              <p>Rp. 5.000.000</p>
            </div>
          </div>
        </div>
        <div class="chart">
          <div id="chart" class="card"></div>
        </div>
        <div class="card">
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
      </div>
      <div class="col-md-4">
        <h2>Income</h2>


        <div class="card p-5" id="income">
          <div class="row ">
            <i class="tim-icons icon-coins" id="icon-badge"></i>
          </div>
          <div class="row">
            <h2 class="my-1" style="color:white">Total income</h2>
          </div>
          <div class="row">
            <p style="color: white; font-size:50px">Rp. 50.000.000,-</p>

          </div>

        </div>
        
      </div>
    </div>
  </div>
</div>


