<?php 

class Kelola_Kategori_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Kelola Kategori',];
    $this->view('kelola-kategori', $data, 'admin');
  }
}