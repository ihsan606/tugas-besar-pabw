<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Detail_Menu_Controller extends Controller{
  public function index($slug)
  {
    $data = [
      'title' => 'Detail Menu',
      'detail' => Menu::with('category')->where('slug', $slug)->get(),
    ];
    $this->view('detail-menu', $data, 'customer');
  }
}