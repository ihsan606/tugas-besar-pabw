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
}