<?php 

class DetailMenuController extends Controller{
  public function index()
  {
    $this->view('detailMenu', [], 'customer');
  }
}