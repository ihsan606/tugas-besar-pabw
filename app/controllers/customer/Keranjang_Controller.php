<?php

require '../vendor/autoload.php';

class Keranjang_Controller extends Controller{
  public function index($snap_token = '')
  {
    session_start();
    if(isset($_SESSION['keranjang']['menus'])){
      if($snap_token != ''){
    
      }
      $data = ['title' => 'Keranjang',];
      $this->view('keranjang', $data, 'customer');
    }else{
      $data = ['title' => 'Keranjang Kosong',];
      $this->view('keranjang-kosong', $data, 'customer');
    }
  }
}