<?php

function money_format($str){
  return 'Rp' . number_format($str, '0', '', '.');
}

?>
