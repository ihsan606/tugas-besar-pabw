<?php 

class DashboardController extends Controller{
  public function index()
  {
    $data = ['title' => 'Dashboard',];
    $this->view('dashboard', $data, 'admin');
  }
}