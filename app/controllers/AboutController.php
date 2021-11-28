<?php 

class AboutController extends Controller{
  public function index($nama = "Mas Aufa", $pekerjaan = "Aslab", $umur = "20")
  {
    $data = [
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur
    ];
    $this->view('template/header', ['title' => 'Halaman About']);
    $this->view('about/index', $data);
    $this->view('template/footer');
  }

  public function page()
  {
    $this->view('template/header', ['title' => 'Halaman Page']);
    $this->view('about/page');
    $this->view('template/footer');
  }
}

