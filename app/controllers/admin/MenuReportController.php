<?php 

class MenuReportController extends Controller{
  public function index()
  {
    $data = ['title' => 'Laporan Menu',];
    $this->view('menuReport', $data, 'admin');
  }
}