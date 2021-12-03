<?php 

class PesananBerhasilController extends Controller{
  public function index()
  {
    $data = ['title' => 'Pesanan Berhasil',];
    $this->view('pesananBerhasil', $data, 'single');
  }
}