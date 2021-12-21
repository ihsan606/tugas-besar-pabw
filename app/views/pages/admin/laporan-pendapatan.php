

<!-- <h1>Halaman Laporan Penjualan</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Laporan Pendapatan Harian</h5>
            <canvas id="chartDay"></canvas>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Laporan Pendapatan Bulanan</h5>
            <canvas id="chartMonth"></canvas>
        </div>
    </div> -->

<div class="row">
  <div class="col-md-9 pb-0 mb-0 d-flex">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Laporan Pendapatan Bulanan</h5>
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

<!-- Chart JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>
<?php
$sampleArray = array(
  0 => "Geeks",
  1 => "for",
  2 => "Geeks",
);

?>

<?php
// memasukkan string ke dalam script chart
$dataHarian = [1000000, 2000000, 3000000, 4000000, 2000000];
$insideData = "";
for ($i = 0; $i < count($dataHarian); $i++) {
  $insideData .= $dataHarian[$i];
  $insideData .= ",";
}

echo
"<script>
    const LabelHarian=['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

    const ctx = document.getElementById('chartDay').getContext('2d');
    const chartDay = new Chart(ctx, {
        type: 'line',
        data: {
            labels:LabelHarian,
            datasets: [{
                tension: 0.3,
                label: 'Laporan Penjualan Harian',
                data:[$insideData],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
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
<?php
// memasukkan string ke dalam script chart
$dataBulanan = $data['pendapatan_perbulan'];

// $data=[];

// $insideData = "";
// for ($i = 0; $i < count($dataBulanan); $i++) {
//   $insideData .= $dataBulanan[$i];
//   $insideData .= ",";
// }

echo
"<script>
    const ct = document.getElementById('chartMonth').getContext('2d');
    const chartMonth = new Chart(ct, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Rp',
                data: [400000,300000,500000,600000,700000,500000,400000,800000,900000,600000,700000,$dataBulanan[11]],
                backgroundColor:'transparent',
                borderColor:'#17a2b8',
                borderWidth: 2
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



<!-- 

<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">Pendapatan Hari Ini</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title"><?= $data['pendapatan_hari_ini'] ?></h3>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">Pendapatan Minggu Ini</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title"><?= $data['pendapatan_minggu_ini'] ?></h3>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
          <i class="material-icons">Pendapatan Bulan Ini</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title"><?= $data['pendapatan_bulan_ini'] ?></h3>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
          <i class="material-icons">Pendapatan Tahun Ini</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title"><?= $data['pendapatan_tahun_ini'] ?></h3>
      </div>
    </div>
  </div>
</div> -->
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
          <i class="fas fa-check-circle fa-2x"></i>
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