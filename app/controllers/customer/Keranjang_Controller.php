<?php 

class Keranjang_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Keranjang',];
    $this->view('keranjang', $data, 'customer');
  }
}