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

  public function show()
  {
    $search = $_POST['search'];

    if($search){
      $categories = Category::where('name', 'like', '%'.$search.'%')->get();
    }else{
      $categories = Category::all();
    }
      
    $data = [
      'title' => 'Kelola Kategori',
      'categories' => $categories,
    ];
    $this->view('kelola-kategori', $data, 'admin');
  }
}