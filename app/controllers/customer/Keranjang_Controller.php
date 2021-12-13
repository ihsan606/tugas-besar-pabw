<?php 

class Keranjang_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Keranjang',
    ];
    $this->view('keranjang', $data, 'customer');
  }

  public function show(){
    session_start();
    $data = $_SESSION['keranjang'];
    var_dump($data);
  }
}