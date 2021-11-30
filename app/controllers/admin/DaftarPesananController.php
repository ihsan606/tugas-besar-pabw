<?php 

class DaftarPesananController extends Controller{
  public function index()
  {
    $this->view('daftarPesanan', [], 'admin');
  }
}