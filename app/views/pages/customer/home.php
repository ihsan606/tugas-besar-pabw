<?php 

require '../vendor/autoload.php';
use App\models\Customer;

$customer = Customer::whereId(1)->first()->name;

if($customer){
    echo "berhasil";
}
echo "<h1> $customer</h1>";

?>



