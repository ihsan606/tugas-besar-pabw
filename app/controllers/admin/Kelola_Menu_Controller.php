<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Kelola_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Kelola Menu',
      'menus' => Menu::all(),
    ];
    $this->view('kelola-menu', $data, 'admin');
  }

  public function show()
  {
    $search = $_POST['search'];

    if($search){
      $menus = Menu::where('title', $search)->get();
    }else{
      $menus = Menu::all();
    }
      
    $data = [
      'title' => 'Kelola Menu',
      'menus' => $menus,
    ];
    $this->view('kelola-menu', $data, 'admin');
  }


}