<?php 

class MenuManagementController extends Controller{
  public function index()
  {
    $this->view('menuManagement', [], 'admin');
  }
}