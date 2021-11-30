<?php 

class PendapatanReportController extends Controller{
  public function index()
  {
    $this->view('pendapatanReport', [], 'admin');
  }
}