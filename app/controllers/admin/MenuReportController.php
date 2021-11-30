<?php 

class MenuReportController extends Controller{
  public function index()
  {
    $this->view('menuReport', [], 'admin');
  }
}