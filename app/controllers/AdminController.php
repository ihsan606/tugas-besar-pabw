<?php 

class AdminController extends Controller{
  // halaman default
  public function index()
  { 
    $data = ['title' => 'Dashboard',];
    $this->view('dashboard', $data, 'admin');
  }

  //halaman login
  public function login()
  { 
    $data = ['title' => 'Login',];
    $this->view('login-admin', $data, 'single');
  }

  //halaman dashboard
  public function dashboard()
  { 
    $data = ['title' => 'Dashboard',];
    $this->view('dashboard', $data, 'admin');
  }

  //halaman daftar pesanan
  public function daftar_pesanan()
  { 
    $data = ['title' => 'Daftar Pesanan',];
    $this->view('daftar-pesanan', $data, 'admin');
  }

  //halaman laporan pendapatan
  public function laporan_pendapatan()
  { 
    $data = ['title' => 'Laporan Pendapatan',];
    $this->view('laporan-pendapatan', $data, 'admin');
  }

  //halaman laporan menu
  public function laporan_menu()
  { 
    $data = ['title' => 'Laporan Menu',];
    $this->view('laporan-menu', $data, 'admin');
  }

  //halaman kelola menu
  public function kelola_menu()
  { 
    $data = ['title' => 'Kelola Menu',];
    $this->view('kelola-menu', $data, 'admin');
  }

  //halaman kelola kategori
  public function kelola_kategori()
  { 
    $data = ['title' => 'Kelola Kategori',];
    $this->view('kelola-kategori', $data, 'admin');
  }

  public function tambah_kategori()
  { 
    $data = ['title' => 'Tambah Kategori',];
    $this->view('tambah-kategori', $data, 'admin');
  }
  
}