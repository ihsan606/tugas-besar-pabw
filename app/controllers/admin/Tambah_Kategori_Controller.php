<?php 
  require '../vendor/autoload.php';
  use App\models\Category;

class Tambah_Kategori_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Tambah Kategori',];
    $this->view('tambah-kategori', $data, 'admin');
  }

  public function store(){
    $name = $_POST['kategori.nama']; 
    $image = $_POST['kategori.gambar'];
    $category = Category::create([
      'name' => $name,
      'image' => $image,
    ]);

    if($category){
      header('Location: Kelola_Kategori_Controller.php');
    }
  }
}