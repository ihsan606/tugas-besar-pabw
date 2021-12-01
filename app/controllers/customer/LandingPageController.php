<?php 

class LandingPageController extends Controller{
  public function index()
  {
    $data = ['title' => 'Landing Page',];
    $this->view('landingPage', $data, 'customer');
  }
}