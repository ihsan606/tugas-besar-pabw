<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Daftar_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Daftar Menu',
      'menus' => Menu::all(),
    ];
    $this->view('daftar-menu', $data, 'customer');
  }
}