<?php 

class MenuManagementController extends Controller{
  public function index()
  {
    $data = ['title' => 'Manajemen Menu',];
    $this->view('menuManagement', $data, 'admin');
  }
}