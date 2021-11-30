<?php 

class LoginAdminController extends Controller{
  public function index()
  {
    $this->view('loginAdmin', [], 'admin');
  }
}