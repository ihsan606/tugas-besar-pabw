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
    var_dump($_POST);
    // $name = $_POST['nama']; 
    // $image = $_POST['gambar'];
    dd($_POST);
    // var_dump($name);
    // var_dump($image);
    // $image = $image->file('image');
    // $image->storeAs(BASEURL . '/img/categories/', $image);
    // $category = Category::create([
    //   'name' => $name,
    //   'image' => $image,
    //   'slug' => Str::slug($name, '-')
    // ]);

    // if($category){
    //   header('Location: ' . BASEURL . '/admin/Kelola_Kategori');
    // }
  }
}