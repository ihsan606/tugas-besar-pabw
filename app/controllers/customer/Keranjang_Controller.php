<?php

require '../vendor/autoload.php';
use App\models\Menu;

class Keranjang_Controller extends Controller{
  public function index($snap_token = '')
  {
    if($_SESSION['keranjang']['menus'] === NULL){
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