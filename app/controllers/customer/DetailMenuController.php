<?php 

class DetailMenuController extends Controller{
  public function index()
  {
    $data = ['title' => 'Detail Menu',];
    $this->view('detailMenu', $data, 'customer');
  }
}