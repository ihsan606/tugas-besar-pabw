<?php 

require '../vendor/autoload.php';
use App\models\Category;
use Illuminate\Support\Str;

class Tambah_Kategori_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Tambah Kategori',];
    $this->view('tambah-kategori', $data, 'admin');
  }

  public function store(){
    // if(issset($_POST['upload'])){
      $name = $_POST['nama']; 
      $image_name = $_FILES['gambar']['name'];
      $direktori = 'img/categories/';
      move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori.$image_name);
      // var_dump($_FILES);

      $category = Category::create([
        'name' => $name,
        'image' => $image_name,
        'slug' => Str::slug($name, '-')
      ]);

      if($category){
        header('Location: ' . BASEURL . '/admin/Kelola_Kategori');
      }
    // }   
  }
}