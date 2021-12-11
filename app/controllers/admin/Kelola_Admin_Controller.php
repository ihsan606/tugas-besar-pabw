<?php 

require '../vendor/autoload.php';
use App\models\Admin;


class Kelola_Admin_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Kelola Admin',
      'admins' => Admin::All(),
    ];
    $this->view('kelola-admin', $data, 'admin');
  }

  public function tambah_admin()
  {
    $data = ['title' => 'Tambah Admin',];
    $this->view('tambah-admin', $data, 'admin');
  }

  public function show()
  {
    $search = $_POST['search'];

    if($search){
      $admins = Admin::where('name', 'like', '%'.$search.'%')->get();
    }else{
      $admins = Admin::all();
    }
      
    $data = [
      'title' => 'Kelola Admin',
      'admins' => $admins,
    ];
    $this->view('kelola-admin', $data, 'admin');
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
          header('Location: ' . BASEURL . '/admin/kelola_admin/tambah_admin');
        }
      }else{
        header('Location: ' . BASEURL . '/admin/kelola_admin/tambah_admin');
      }   
    }else{
      header('Location: ' . BASEURL . '/admin/kelola_admin/tambah_admin');
    } 
  }

  public function update(){
    echo 'update';
  }

  public function destroy(){
    echo 'destroy';    
  }
}