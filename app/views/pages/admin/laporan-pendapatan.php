<<<<<<< HEAD
<!doctype html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>
</head>

<body>
    <h1>Halaman Laporan Penjualan</h1>
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
    </div>
    
    <script>
    const ctx = document.getElementById('chartDay').getContext('2d');
    const chartDay = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Laporan Penjualan Harian',
                data: [1500000, 3000000, 2500000, 4000000, 1700000, 3400000, 2700000],
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
    </script>

    <script>
    const ct = document.getElementById('chartMonth').getContext('2d');
    const chartMonth = new Chart(ct, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# of Votes',
                data: [32000000, 33500000, 30000000, 40000000, 27000000, 39500000, 32000000, 29000000, 32700000, 29500000, 34000000, 32900000],
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
    </script>
</body>
=======
<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">Pendapatan Hari Ini</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title"><?=$data['pendapatan_hari_ini']?></h3>
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
        <h3 class="card-title"><?=$data['pendapatan_minggu_ini']?></h3>
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
        <h3 class="card-title"><?=$data['pendapatan_bulan_ini']?></h3>
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
        <h3 class="card-title"><?=$data['pendapatan_tahun_ini']?></h3>
      </div>
    </div>
  </div>
</div>
>>>>>>> d4a83edd32620964a8ad10eaed94ad70dac8e506
