<?php 

require '../vendor/autoload.php';
use App\models\Menu;
use App\models\Category;
use Illuminate\Support\Str;

class Kelola_Menu_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Kelola Menu',
      'menus' => Menu::with('category')->get(),
    ];
    $this->view('kelola-menu', $data, 'admin');
  }

  public function tambah_menu()
  {
    $data = [
      'title' => 'Tambah Menu',
      'categories' => Category::All(),
    ];
    $this->view('tambah-menu', $data, 'admin');
  }

  public function edit_menu($id)
  {
    $data = ['title' => 'Edit Menu',];
    $this->view('edit-menu', $data, 'admin');
  }

  public function show()
  {
    $search = $_POST['search'];

    if($search){
      $menus = Menu::with('category')->where('title', 'like', '%'.$search.'%')->get();
    }else{
      $menus = Menu::all();
    }
      
    $data = [
      'title' => 'Kelola Menu',
      'menus' => $menus,
    ];
    $this->view('kelola-menu', $data, 'admin');
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

    if($name != null && $image_name != null && $price != null && $category_id != null && $description !== null && $discount != null){
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
            header('Location: ' . BASEURL . '/admin/kelola_menu');
          }
        }else{
          header('Location: ' . BASEURL . '/admin/kelola_menu/tambah_menu');
        }
      }else{
        header('Location: ' . BASEURL . '/admin/kelola_menu/tambah_menu');
      }
    }else{
      header('Location: ' . BASEURL . '/admin/kelola_menu/tambah_menu');
    }  
  }

  public function update($id){
    echo 'update' . $id;
  }

  public function destroy($id){
    $menu = Menu::where('id', $id)->delete();
    if($menu){
      header('Location: ' . BASEURL . '/admin/kelola_menu');
    }
  }

  public function set_stock($id){
    echo 'set stock' . $id;
  }
}