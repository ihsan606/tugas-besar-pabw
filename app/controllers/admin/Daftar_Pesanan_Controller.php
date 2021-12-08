<?php 

class Daftar_Pesanan_Controller extends Controller{
  public function index()
  { 
    $data = ['title' => 'Daftar Pesanan',];
    $this->view('daftar-pesanan', $data, 'admin');
  }
}