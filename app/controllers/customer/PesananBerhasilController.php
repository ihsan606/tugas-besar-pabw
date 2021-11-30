<?php 

class PesananBerhasilController extends Controller{
  public function index()
  {
    $this->view('pesananBerhasil', [], 'single');
  }
}