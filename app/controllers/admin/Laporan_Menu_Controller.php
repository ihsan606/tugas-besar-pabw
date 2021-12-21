<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Laporan_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Laporan Menu',
      'menus' => Menu::with('category')->get(),
    ];
    $this->view('laporan-menu', $data, 'admin');
  }
}