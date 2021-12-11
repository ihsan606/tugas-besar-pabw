<?php 

require '../vendor/autoload.php';
use App\models\Category;
use Illuminate\Support\Str;


class Kelola_Kategori_Controller extends Controller{
  public function index(){
    $data = [
      'title' => 'Kelola Kategori',
      'categories' => Category::All(),
    ];
    $this->view('kelola-kategori', $data, 'admin');
  }

  public function tambah_kategori(){
    $data = ['title' => 'Tambah Kategori',];
    $this->view('tambah-kategori', $data, 'admin');
  }

  public function show(){
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

  public function store(){
    $image_name = $_FILES['image']['name'];
    $allowed_extension = ['png', 'jpg', 'jpeg'];
    $x = explode('.', $image_name);
    $extension = strtolower(end($x));
    $size = $_FILES['image']['size'];

    $name = $_POST['name']; 

    if($name != null && $image_name != null){
      if(in_array($extension, $allowed_extension) === true){
        // echo 'type true';
        if($size < 2000000){
          // echo 'ukuran true';
          $direktori = 'img/categories/';
          move_uploaded_file($_FILES['image']['tmp_name'], $direktori.$image_name);
          $category = Category::create([
            'name' => $name,
            'image' => $image_name,
            'slug' => Str::slug($name, '-')
          ]);
          if($category){
            header('Location: ' . BASEURL . '/admin/kelola_kategori');
          }
        }else{
          header('Location: ' . BASEURL . '/admin/kelola_kategori/tambah_kategori');
        }
      }else{
        header('Location: ' . BASEURL . '/admin/kelola_kategori/tambah_kategori');
      }
    }else{
      header('Location: ' . BASEURL . '/admin/kelola_kategori/tambah_kategori');
    }  
  }

  public function update($id){
    echo 'update' . $id;
  }

  public function destroy($id){
    echo 'destroy' . $id;
  }
}