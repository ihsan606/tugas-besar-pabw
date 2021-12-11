<?php 

require '../vendor/autoload.php';
use App\models\Admin;

class Tambah_Admin_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Tambah Admin',];
    $this->view('tambah-admin', $data, 'admin');
  }

  public function store(){
    $name = $_POST['name']; 

    $email = $_POST['email'];

    $password = $_POST['password']; 

    $confirm_password = $_POST['confirm_password'];

    if($name != null && $email != null && $password != null && $confirm_password != null){
      if($password == $confirm_password){
        $admin= Admin::create([
          'name' => $name,
          'email' => $email,
          'password' =>$password
        ]);
        if($admin){
          header('Location: ' . BASEURL . '/admin/kelola_admin');
        }
      }else{
        header('Location: ' . BASEURL . '/admin/tambah_admin');
      }   
    }else{
      header('Location: ' . BASEURL . '/admin/tambah_admin');
    } 
  }
}