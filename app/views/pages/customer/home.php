<?php 
require '../../../models/Customer.php';

$customer = Customer::whereId(1)->first()->name;
echo "<h1> $customer</h1>";

?>



