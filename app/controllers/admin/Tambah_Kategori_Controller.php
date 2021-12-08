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
    $name = $_POST['kategori_nama']; 
    $image = $_POST['kategori_gambar'];
    // var_dump($name);
    // var_dump($image);
    // $image = $image->file('image');
    // $image->storeAs(BASEURL . '/img/categories/', $image->hashName());
    $category = Category::create([
      'name' => $name,
      'image' => $image,
      'slug' => Str::slug($name, '-')
    ]);

    if($category){
      header('Location: ' . BASEURL . '/admin/Kelola_Kategori');
    }
  }
}