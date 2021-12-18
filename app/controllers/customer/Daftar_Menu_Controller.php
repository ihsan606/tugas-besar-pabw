<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Daftar_Menu_Controller extends Controller{
  public function index()
  {
    session_start();
    $data = [
      'title' => 'Daftar Menu',
      'menus' => Menu::with('category')->get(),
    ];
    $this->view('daftar-menu', $data, 'customer');
  }

  public function show()
  {
    session_start();
    $search = $_POST['search'];

    if($search){
      $menus = Menu::with('category')->where('title', 'like', '%'.$search.'%')->get();
    }else{
      header('Location: ' . BASEURL . '/customer/daftar_menu');
    }
    $data = [
      'title' => 'Daftar Menu',
      'menus' => $menus,
    ];
    $this->view('daftar-menu', $data, 'customer');
  }

  public function sort($key_word)
  {
    session_start();

    if($key_word == 'termurah'){
      $menus = Menu::with('category')->orderBy('final_price')->get();
    }else{
      header('Location: ' . BASEURL . '/customer/daftar_menu');
    }

    $data = [
        'title' => 'Daftar Menu',
        'menus' => $menus,
      ];
      $this->view('daftar-menu', $data, 'customer');
  }
}