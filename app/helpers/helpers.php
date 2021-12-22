<?php

function money_format($str){
  return 'Rp' . number_format($str, '0', '', '.');
}

function alert_success($message, $type){
  if($type == 'success'){
    echo"
      <script>
        Swal.fire({
          type: 'success',
          title: 'BERHASIL!',
          text: '$message',
          timer: 2000
        })
      </script>
    ";
  }
}
      
?>
