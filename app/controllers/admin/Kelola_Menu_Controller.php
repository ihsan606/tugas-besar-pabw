<?php 

class Kelola_Menu_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Kelola Menu',];
    $this->view('kelola-menu', $data, 'admin');
  }
}