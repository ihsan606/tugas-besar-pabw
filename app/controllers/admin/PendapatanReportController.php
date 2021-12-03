<?php 

class PendapatanReportController extends Controller{
  public function index()
  {
    $data = ['title' => 'Laporan Pendapatan',];
    $this->view('pendapatanReport', $data, 'admin');
  }
}