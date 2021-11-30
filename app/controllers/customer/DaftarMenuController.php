<?php 

class DaftarMenuController extends Controller{
  public function index()
  {
    $this->view('daftarMenu', [], 'customer');
  }
}