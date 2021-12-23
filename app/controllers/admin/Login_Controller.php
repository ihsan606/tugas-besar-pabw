<?php 

require '../vendor/autoload.php';

use App\models\Admin;

class Login_Controller extends Controller{
  public function index()
  {
    session_start();
    if(isset($_SESSION['login'])){
      header('location:'. BASEURL. '/admin/dashboard');
    }
    $data = ['title' => 'Login',];
    $this->view('login-admin', $data, 'single');
  }

  public function login(){
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

  public function logout(){
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['admin']);

    header('location:'. BASEURL. '/admin/login');
  }
}