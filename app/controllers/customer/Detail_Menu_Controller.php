<?php 

require '../vendor/autoload.php';
use App\models\Menu;

class Detail_Menu_Controller extends Controller{
  public function index($slug)
  {
    session_start();
    $data = [
      'title' => 'Detail Menu',
      'detail_menu' => Menu::with('category', 'reviews')->where('slug', $slug)->get(),
    ];
    $this->view('detail-menu', $data, 'customer');
  }

  public function store($menu_id){
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    session_start();
    if(isset($_SESSION['keranjang']['menus']) == 0){
      $_SESSION['keranjang']['menus'] = []; 
    }

    $cek = false;
    for($i = 0; $i < count($_SESSION['keranjang']['menus']); $i++){
      if($_SESSION['keranjang']['menus'][$i]['menu_id'] == $menu_id){
        $cek = true;
        $_SESSION['keranjang']['menus'][$i]['jumlah'] = $_SESSION['keranjang']['menus'][$i]['jumlah'] + $jumlah;
        $_SESSION['keranjang']['menus'][$i]['keterangan'] = $_SESSION['keranjang']['menus'][$i]['keterangan'] . ", " . $keterangan;
        break;
      }
    }

    if(!$cek){
      array_push(
        $_SESSION['keranjang']['menus'],
        [
          'menu_id' => $menu_id,
          'menu' => Menu::where('id', $menu_id)->get(),
          'jumlah' => $jumlah,
          'keterangan' => $keterangan,
        ]
      );
    }

    $_SESSION['alert'] = [
      'message' => 'menu berhasil dimasukkan ke keranjang',
      'type' => 'success',
    ];
    header('Location: ' . BASEURL . '/customer/keranjang');
  }
}

// 'keranjang' = [
//   'nama_pelanggan' =>'',
//   'nomor_meja' =>'',
//   'total_tagihan' =>'',
//   'menus' =>[
//     [
//       'menu_id' => $menu_id,
//       'menu' => Menu::where('id', $menu_id)->get(),
//       'jumlah' => $jumlah,
//       'keterangan' => $keterangan,
//     ]
//   ]
// ]