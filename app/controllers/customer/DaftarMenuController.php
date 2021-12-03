<?php 

class DaftarMenuController extends Controller{
  public function index()
  {
    $data = ['title' => 'Daftar Menu',];
    $this->view('daftarMenu', $data, 'customer');
  }
}