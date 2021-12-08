<?php 

class Login_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Login',];
    $this->view('login-admin', $data, 'single');
  }
}