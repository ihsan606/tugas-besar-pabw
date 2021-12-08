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
    $name = $_POST['nama']; 

    $image_name = $_FILES['gambar']['name'];
    $allowed_extension = ['png', 'jpg', 'jpeg'];
    $x = explode('.', $image_name);
    $extension = strtolower(end($x));
    $size = $_FILES['gambar']['size'];
    if(in_array($extension, $allowed_extension) === true){
      echo 'type true';
      if($size < 2000000){
        echo 'ukuran true';
        // $direktori = 'img/categories/';
        // move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori.$image_name);
        // $category = Category::create([
        //   'name' => $name,
        //   'image' => $image_name,
        //   'slug' => Str::slug($name, '-')
        // ]);
        // if($category){
        //   header('Location: ' . BASEURL . '/admin/Kelola_Kategori');
        // }
      }
    }  
  }
}