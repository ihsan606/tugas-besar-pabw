<?php 

require '../vendor/autoload.php';
use App\models\Category;
use App\models\Menu;
use Illuminate\Support\Str;

class Tambah_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Tambah Menu',
      'categories' => Category::All(),
    ];
    $this->view('tambah-menu', $data, 'admin');
  }

  public function store(){
    $image_name = $_FILES['image']['name'];
    $allowed_extension = ['png', 'jpg', 'jpeg'];
    $x = explode('.', $image_name);
    $extension = strtolower(end($x));
    $size = $_FILES['image']['size'];

    $name = $_POST['name']; 

    $price = $_POST['price']; 

    $category_id = $_POST['category_id'];
     
    $description = $_POST['description'];

    $discount = $_POST['discount']; 

    if(in_array($extension, $allowed_extension) === true){
      echo 'type true';
      if($size < 2000000){
        echo 'ukuran true';
        $direktori = 'img/menus/';
        move_uploaded_file($_FILES['image']['tmp_name'], $direktori.$image_name);
        $menu = Menu::create([
          'image' => $image_name,
          'title' => $name,
          'slug' => Str::slug($name, '-'),
          'category_id' => $category_id,
          'description' => $description,
          'price' => $price,
          'discount' => $discount,
        ]);
        if($menu){
          header('Location: ' . BASEURL . '/admin/Kelola_Menu');
        }
      }
    }  
  }
}