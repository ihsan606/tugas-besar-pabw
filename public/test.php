<?php
  // memasukkan string ke dalam script chart
  $dataHarian = [1000000, 2000000, 3000000, 4000000, 2000000];
  $insideData = "";
  for ($i = 0; $i < count($dataHarian); $i++) {
    $insideData .= $dataHarian[$i];
    $insideData .= ",";
  }

  echo"
    <script>
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
    </script>
  ";
  ?>
