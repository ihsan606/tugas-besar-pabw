<?php

require '../vendor/autoload.php';

class Keranjang_Controller extends Controller{
  public function index($snap_token = '')
  {
    session_start();
    if(isset($_SESSION['keranjang']['menus'])){
      if($snap_token != ''){
    
      }
      $data = ['title' => 'Keranjang',];
      $this->view('keranjang', $data, 'customer');
    }else{
      $data = ['title' => 'Keranjang Kosong',];
      $this->view('keranjang-kosong', $data, 'customer');
    }
  }

  public function edit_keranjang($id){
    session_start();
    for($i = 0; $i < count($_SESSION['keranjang']['menus']); $i++){
      if($_SESSION['keranjang']['menus'][$i]['menu_id'] == $id){
        $detail_keranjang = $_SESSION['keranjang']['menus'][$i];
        break;
      }
    }
    $data = [
      'title' => 'Edit Keranjang',
      'detail_menu' => $detail_keranjang['menu'],
      'detail_keranjang' => $detail_keranjang,
    ];
    $this->view('edit-keranjang', $data, 'customer');
  }

  public function update($id){
    $jumlah = $_POST['jumlah']; 
    $keterangan = $_POST['keterangan']; 

    session_start();
    for($i = 0; $i < count($_SESSION['keranjang']['menus']); $i++){
      if($_SESSION['keranjang']['menus'][$i]['menu_id'] == $id){
        $_SESSION['keranjang']['menus'][$i]['jumlah'] = $jumlah;
        $_SESSION['keranjang']['menus'][$i]['keterangan'] = $keterangan;
        break;
      }
    }
    header('location:'. BASEURL. '/customer/keranjang');
  }

  public function destroy($id){
    session_start();
    for($i = 0; $i < count($_SESSION['keranjang']['menus']); $i++){
      if($_SESSION['keranjang']['menus'][$i]['menu_id'] == $id){
        unset($_SESSION['keranjang']['menus'][$i]);
        break;
      }
    }
    header('location:'. BASEURL. '/customer/keranjang');
  }
}