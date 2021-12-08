<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Kelola_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Kelola Menu',
      'menus' => Menu::All(),
    ];
    $this->view('kelola-menu', $data, 'admin');
  }
}