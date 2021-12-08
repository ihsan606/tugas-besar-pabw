<?php 

class Detail_Menu_Controller extends Controller{
  public function index()
  {
    $data = ['title' => 'Detail Menu',];
    $this->view('detail-menu', $data, 'customer');
  }
}