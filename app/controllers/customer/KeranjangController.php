<?php 

class KeranjangController extends Controller{
  public function index()
  {
    $this->view('keranjang', [], 'customer');
  }
}