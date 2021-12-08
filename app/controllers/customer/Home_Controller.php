<?php 

class Home_Controller extends Controller{
  public function index()
  { 
    $data = ['title' => 'Home',];
    $this->view('home', $data, 'customer');
  }
}