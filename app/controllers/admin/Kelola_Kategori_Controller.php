<?php 

require '../vendor/autoload.php';
use App\models\Category;


class Kelola_Kategori_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Kelola Kategori',
      'categories' => Category::All(),
    ];
    $this->view('kelola-kategori', $data, 'admin');
  }
}