<?php 

require '../vendor/autoload.php';

use App\models\Admin;

class Login_Controller extends Controller{
  public function index()
  {
    session_start();
    $data = ['title' => 'Login',];
    $this->view('login-admin', $data, 'single');
  }

  public function auth(){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $admin = Admin::where('email', $email)->where('password', $password)->first();

    if($admin){
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['admin'] = $admin->name;
      header('location:'. BASEURL. '/admin/dashboard');
    }else{
      $data = [
        'title' => 'Login',
        'email' => $email,
      ];
      $this->view('login-admin', $data, 'single');
    }
  }
}