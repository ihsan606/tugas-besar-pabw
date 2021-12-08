<?php 

class Tambah_Menu_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Tambah Menu',];
    $this->view('tambah-menu', $data, 'admin');
  }
}