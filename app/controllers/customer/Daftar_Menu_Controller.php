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
      'message' => 'Daftar Menu',
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
      'message' => 'Hasil Pencarian ' . '"' . $search . '"',  
    ];
    $this->view('daftar-menu', $data, 'customer');
  }

  public function sort($key_word)
  {
    session_start();

    if($key_word == 'termurah'){
      $menus = Menu::with('category')->orderBy('final_price', 'ASC')->get();
      $message = 'Menu Termurah';
    }else if($key_word == 'termahal'){
      $menus = Menu::with('category')->orderBy('final_price', 'DESC')->get();
      $message = 'Menu Termahal';
    }else if($key_word == 'terbaru'){
      $menus = Menu::with('category')->orderBy('created_at', 'DESC')->get();
      $message = 'Menu Terbaru';
    }else if($key_word == 'terlaris'){
      $menus = Menu::with('category')->orderBy('sold', 'DESC')->get();
      $message = 'Menu Terlaris';
    }else if($key_word == 'rating'){
      $menus = Menu::with('category')->orderBy('rating', 'DESC')->get();
      $message = 'Urutan Rating';
    }else if($key_word == 'promo'){
      $menus = Menu::with('category')->where('discount', '>', '0')->get();
      $message = 'Menu Promo';
    }else{
      header('Location: ' . BASEURL . '/customer/daftar_menu');
    }

    $data = [
        'title' => 'Daftar Menu',
        'menus' => $menus,
        'message' => $message,
      ];
      $this->view('daftar-menu', $data, 'customer');
  }
}