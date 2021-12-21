<div class="container-fill">
  <!-- Laporan Pendapatan -->
  <div class="row">
    <div class="col-md-8 pb-0 mb-0 d-flex">
      <!-- <div class="card card-chart">
        <div class="card-header">
          <div class="row ">
            <div class="col">
              <i>
                <h2 class="card-title">Pendapatan Bulanan</h2>
              </i>
            </div>
          </div>
          <div class="chart pb-0">
            <div id="chart" class="card pb-0"></div>
          </div>
        </div>
      </div> -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Laporan Pendapatan Bulanan</h5>
          <canvas id="chartMonth"></canvas>
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
              <h3 class="card-title"><?= $data['pendapatan_hari_ini'] ?></h3>
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
              <h3 class="card-title"><?= $data['pendapatan_minggu_ini'] ?></h3>
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
              <h3 class="card-title"><?= $data['pendapatan_bulan_ini'] ?></h3>
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
              <h3 class="card-title"><?= $data['pendapatan_tahun_ini'] ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Total Shipments</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartLinePurple"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Daily Sales</h5>
          <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="CountryChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Completed Tasks</h5>
          <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartLineGreen"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>
  <?php 
    // memasukkan string ke dalam script chart
    $dataBulanan=$data['pendapatan_perbulan'];
    $insideData="";
    for($i=0;$i<count($dataBulanan);$i++){
      $insideData.=$dataBulanan[$i];
      $insideData.=",";
    }

    echo
    "<script>
    const ct = document.getElementById('chartMonth').getContext('2d');
    const chartMonth = new Chart(ct, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# of Votes',
                data: [$insideData],
                backgroundColor:'#17a2b8',
                borderColor:'#17a2b8',
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>" 
    ?>

