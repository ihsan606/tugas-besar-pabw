<?php 

class HomeController extends Controller{
  public function index()
  {
    $this->view('template/header', ['title' => 'Halaman Home']);
    $this->view('Home/index');
    $this->view('template/footer');
  }
}
