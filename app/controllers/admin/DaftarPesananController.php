<?php 

class DaftarPesananController extends Controller{
  public function index()
  { 
    $data = ['title' => 'Daftar Pesanan',];
    $this->view('daftarPesanan', $data, 'admin');
  }
}