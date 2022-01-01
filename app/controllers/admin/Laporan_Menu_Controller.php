<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Laporan_Menu_Controller extends Controller{
  public function index()
  {
    session_start();
    $data = [
      'title' => 'Laporan Menu',
      'menus' => Menu::with('reviews.customer')->get(),
    ];
    $this->view('laporan-menu', $data, 'admin');
  }

  public function show()
  {
    $search = $_POST['search'];

    if($search){
      $data = [
        'title' => 'Laporan Menu',
        'menus' => Menu::with('reviews')->where('title', 'like', '%'.$search.'%')->get(),
      ];
      $this->view('laporan-menu', $data, 'admin');
    }else{
      header('Location: ' . BASEURL . '/admin/laporan_menu');
    }
  }
}