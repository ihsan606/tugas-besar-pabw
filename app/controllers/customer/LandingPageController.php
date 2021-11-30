<?php 

class LandingPageController extends Controller{
  public function index()
  {
    $this->view('landingPage', [], 'customer');
  }
}