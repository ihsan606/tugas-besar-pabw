<?php

use App\models\Invoice;

require '../vendor/autoload.php';

class Success_Controller extends Controller{
    public function index(){
        $data =[
            'title' => "Pesanan-Berhasil"
        ];
        $this->view('order-success', $data, 'single');

    }
}