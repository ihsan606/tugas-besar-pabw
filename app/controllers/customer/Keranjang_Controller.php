<?php

require '../vendor/autoload.php';
use App\models\Menu;

class Keranjang_Controller extends Controller{
  public function index($snap_token = '')
  {
    if($snap_token != ''){
    
    }
    $data = ['title' => 'Keranjang',];
    $this->view('keranjang', $data, 'customer');
  }
}