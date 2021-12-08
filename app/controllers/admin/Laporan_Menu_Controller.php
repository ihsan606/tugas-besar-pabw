<?php 

class Laporan_Menu_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Laporan Menu',];
    $this->view('laporan-menu', $data, 'admin');
  }
}