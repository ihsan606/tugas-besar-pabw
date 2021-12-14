<?php 

define('BASEURL', 'http://localhost:8080/tugas-besar-pabw/public');
// define('BASEURL', 'http://rezerva.test:4040//tugas-besar-pabw/public');

function money_format($str){
  return 'Rp' . number_format($str, '0', '', '.');
}