<?php 

class LoginAdminController extends Controller{
  public function index()
  {
    $data = ['title' => 'Login',];
    $this->view('loginAdmin', $data, 'single');
  }
}