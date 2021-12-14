<?php

use App\models\Customer;
use App\models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Midtrans\Snap;

require '../vendor/autoload.php';

class Checkout_Controller extends Controller
{

    public function __construct()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-J8w5w1HZkc3QYjMNVpq-C1lf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }


    public function store()
    {
        session_start();
        
       
            //create customer table
            $customer = Customer::create([
                'name' => $_POST['customer_name'],
                'email' => 'admin@gmail.com',
                'password' => 'admin',
            ]);

            // // create invoice number
            $length = 10;
            $random = '';

            for ($i = 0; $i < $length; $i++) {
                $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
            }

            // //generate no invoice
            $no_invoice = 'INV-' . Str::upper($random);
            $invoice = Invoice::create([
                'invoices' => $no_invoice,
                'customer_id' => $customer->id,
                'grand_total' => $_POST['grand_total'],
                'status' =>'pending',
            ]);
            $menus = $_SESSION['keranjang']['menus'];
            for ($i=0; $i < count($menus); $i++) { 
                $menu = $menus[$i];
                $invoice->orders()->create([
                    'invoice_id' => $invoice->id,
                    'menu_id' => $menu['menu']['0']->id,
                    'qty' => $menu['jumlah'],
                    'table_id'=>$_POST['no_meja'],
                    'description' =>$menu['keterangan'],
                    'status' =>'dikonfirmasi',
                    'price'=>$menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100
                ]);
            }

            //hapus keranjang
            session_unset();
            //create transaction to midtrans, then save snap token
            $payload = [
                'transaction_details' => [
                    'order_id'      => $invoice->invoice,
                    'gross_amount'  => $invoice->grand_total,
                ],
                'customer_details' => [
                    'first_name'       => Customer::whereId($customer->id)->first()->name,
                    'email'            => Customer::whereId($customer->id)->first()->email,
                    'phone'            => '081983744023',
                ]
            ];

            $snap_token = Snap::getSnapToken($payload);

            //update snap_token
            $invoice->snap_token = $snap_token;
            $invoice->save();
            header('location:'. BASEURL. 'customer/keranjang/');


            




            //store order by invoice
       
        



    }
}
