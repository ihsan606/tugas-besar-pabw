<?php 

class Laporan_Pendapatan_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Laporan Pendapatan',];
    $this->view('laporan-pendapatan', $data, 'admin');
  }
}