<?php 

class Daftar_Menu_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Daftar Menu',];
    $this->view('daftar-menu', $data, 'customer');
  }
}