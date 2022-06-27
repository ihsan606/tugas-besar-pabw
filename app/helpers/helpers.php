<?php

function money_format($str){
  return 'Rp' . number_format($str, '0', '', '.');
}

function success_and_error($message, $type){
  if($type == 'success'){
    echo"
      <script>
        Swal.fire({
          type: 'success',
          title: 'BERHASIL!',
          text: '$message',
          timer: 2000
        });
      </script>
    ";
  }elseif($type == 'error'){
    echo"
      <script>
        Swal.fire({
          type: 'error',
          title: 'ERROR!',
          text: '$message',
          timer: 3000
        });
      </script>
    ";
  }
}

function chart_bulanan($id, $data, $type, $bgCol='transparent', $brCol='#11cdef', $brWid=2){
  echo"
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js'></script>
  ";

  $dataBulanan = $data;

    $insideData = "";
    for ($i = 0; $i < count($dataBulanan); $i++) {
      $insideData .= $dataBulanan[$i];
      $insideData .= ",";
    }
  
  echo <<<TEXT
    <script>
      const ct = document.getElementById('$id').getContext('2d');
      const chartMonth = new Chart(ct, {
        type: '$type',
        data: {
          labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV', 'DES'],
          datasets: [{
            label: 'Rp',
            data: [$insideData],
            backgroundColor:'$bgCol',
            borderColor:'$brCol',
            borderWidth: $brWid
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
  TEXT;
}
      
?>