<?php

use App\models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

require '../vendor/autoload.php';

class Checkout_Controller extends Controller {

    public function __construct() {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-J8w5w1HZkc3QYjMNVpq-C1lf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }


    public function store($data) {

        DB::transaction(function () use ($data) {

            //create customer table




            //create invoice number
            $length = 10;
            $random = '';

            for ($i = 0; $i < $length; $i++) {
                $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
            }

            //generate no invoice
            $no_invoice = 'INV-'.Str::upper($random);
            
        });
    }

}
