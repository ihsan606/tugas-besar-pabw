<?php

require '../vendor/autoload.php';
use App\models\Menu;

class Keranjang_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Keranjang',];
    $this->view('keranjang', $data, 'customer');
  }

  public function store($menu_id){
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    session_start();
    if(isset($_SESSION['keranjang']['menus']) == 0){
      $_SESSION['keranjang']['menus'] = []; 
    }

    $cek = false;
    for($i = 0; $i < count($_SESSION['keranjang']['menus']); $i++){
      if($_SESSION['keranjang']['menus'][$i]['menu_id'] == $menu_id){
        $cek = true;
        $_SESSION['keranjang']['menus'][$i]['jumlah'] = $_SESSION['keranjang']['menus'][$i]['jumlah'] + $jumlah;
        $_SESSION['keranjang']['menus'][$i]['keterangan'] = $_SESSION['keranjang']['menus'][$i]['keterangan'] . ", " . $keterangan;
        break;
      }
    }

    if(!$cek){
      array_push(
        $_SESSION['keranjang']['menus'],
        [
          'menu_id' => $menu_id,
          'menu' => Menu::where('id', $menu_id)->get(),
          'jumlah' => $jumlah,
          'keterangan' => $keterangan,
        ]
      );
    }
    
    header('Location: ' . BASEURL . '/customer/keranjang');
  }
}