<?php 

class KeranjangController extends Controller{
  public function index()
  {
    $data = ['title' => 'Keranjang',];
    $this->view('keranjang', $data, 'customer');
  }
}