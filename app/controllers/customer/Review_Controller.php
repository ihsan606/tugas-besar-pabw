<?php 

use App\models\Invoice;

require '../vendor/autoload.php';

class Review_Controller extends Controller {


    public function index() {
        session_start();
        $customer_id = $_SESSION['customer_id'];
        $data =[
            'title' => 'Review',
            'invoices' =>Invoice::with('orders.menu','customer')->where('customer_id',$customer_id)->first(),
        ];
        $this->view('review', $data, 'single');


    }
}