<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Daftar_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Daftar Menu',
      'menus' => Menu::with('category')->get(),
    ];
    $this->view('daftar-menu', $data, 'customer');
  }

  public function show(){
    $search = $_POST['search'];

    if($search){
      $menus = Menu::with('category')->where('title', 'like', '%'.$search.'%')->get();
      $data = [
        'title' => 'Daftar Menu',
        'menus' => $menus,
      ];
      $this->view('daftar-menu', $data, 'customer');
    }else{
      header('Location: ' . BASEURL . '/customer/daftar_menu');
    }
  }
}