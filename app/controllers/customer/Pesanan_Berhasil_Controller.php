<?php 

class Pesanan_Berhasil_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Pesanan Berhasil',];
    $this->view('pesanan-berhasil', $data, 'single');
  }
}