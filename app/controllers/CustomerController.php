<?php 

class CustomerController extends Controller{
  // halaman default
  public function index()
  { 
    $data = ['title' => 'Home',];
    $this->view('home', $data, 'customer');
  }

  //halaman login
  public function login()
  { 
    $data = ['title' => 'Login',];
    $this->view('login-customer', $data, 'single');
  }

  //halaman home
  public function home()
  { 
    $data = ['title' => 'Home',];
    $this->view('home', $data, 'customer');
  }

  //halaman daftar menu
  public function daftar_menu()
  { 
    $data = ['title' => 'Daftar Menu',];
    $this->view('daftar-menu', $data, 'customer');
  }

  //halaman detail menu
  public function detail_menu()
  { 
    $data = ['title' => 'Detail Menu',];
    $this->view('detail-menu', $data, 'customer');
  }

  //halaman keranjang
  public function keranjang()
  { 
    $data = ['title' => 'Keranjang',];
    $this->view('keranjang', $data, 'customer');
  }

  //halaman pesanan berhasil
  public function pesanan_berhasil()
  { 
    $data = ['title' => 'Pesanan Berhasil',];
    $this->view('pesanan-berhasil', $data, 'single');
  }
}