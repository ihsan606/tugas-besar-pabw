
<?php

use App\models\Invoice;

require '../vendor/autoload.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/uq.png" width="50" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- local css -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Rezerva | Customer | <?=$data['title'];?></title>
    <!-- snap pay configuration -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-_0bji155hJ_YL7Pw"></script>
</head>
<body>
  <div class="container mt-4">
<div class="card border-0 rounded shadow">
            <div class="card-body">
              <h5><i class="fa fa-shopping-cart"></i> DETAIL ORDER</h5>
              <hr>
              <table class="table table-bordered">
                <client-only>
                  <tr>
                    <td style="width: 25%">
                    <h5>NO. INVOICE </h5>
                    </td>
                    <td style="width: 1%">:</td>
                    <td>
                        <h5><?= $data['invoices']->invoice; ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <h5>NAMA</h5>
                    </td>
                    <td>:</td>
                    <td>
                        <h5><?= $data['invoices']->customer->name; ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <h5>GRAND TOTAL</h5>
                    </td>
                    <td>:</td>
                    <td>
                        <h5><?= money_format($data['invoices']->grand_total); ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <h5>STATUS</h5>
                    </td>
                    <td>:</td>
                    <td>
                      <button id="btn-status" class="btn btn-info"> pending</button>
                      <button class="btn btn-warning"id="pay-button" onclick="openSnap()">Bayar Sekarang</button>


                    </td>
                  </tr>
                </client-only>
              </table>
            </div>
          </div>

          <div class="card border-0 rounded shadow border-top-orange mt-4">
            <div class="card-header">
              <span class="font-weight-bold"><i class="fa fa-shopping-cart"></i> DETAIL ITEMS</span>
            </div>
            <?= $data['invoices']; ?>
            <div class="card-body">
              <table style='border-style: solid !important;border-color: rgb(198, 206, 214) !important;'>
              <?php
              $url = BASEURL;
              
              foreach($data['invoices']->orders as $menu)
                $image_title = $menu[0]->menu->title;
                echo "<p>$menu->description</p>--> $image_title" ;
                echo "<tr style='background: #edf2f7;'>
                  <td class='b-none' width='25%'>
                  <div class='wrapper-image-cart'>
                  <img src='$url/img/menus/$image_menu' style='width: 100%;border-radius: .5rem'>
                </div>
                  </td>
                </tr>"
                ?>
                </table>
                
              
              <!-- <table class="table" style="border-style: solid !important;border-color: rgb(198, 206, 214) !important;">
                <tbody>
                  <client-only>
                    <tr v-for="order in invoice.orders" :key="order.id" style="background: #edf2f7;">
                      <td class="b-none" width="25%">
                        <div class="wrapper-image-cart">
                          <img :src="order.product.image" style="width: 100%;border-radius: .5rem">
                        </div>
                      </td>
                      <td class="b-none" width="50%">
                        <h5><b>{{ order.product.title }}</b></h5>
                        <table class="table-borderless" style="font-size: 14px">
                          <tr>
                            <td style="padding: .20rem">QTY</td>
                            <td style="padding: .20rem">:</td>
                            <td style="padding: .20rem"><b>{{ order.qty }}</b></td>
                          </tr>
                        </table>
                      </td>
                      <td class="b-none text-right">
                        <p class="m-0 font-weight-bold">Rp. {{ formatPrice(order.price) }}</p>
                      </td>
                    </tr>
                  </client-only>
                </tbody>
              </table> -->
            </div>
          </div>
        </div>


<script type="text/javascript">

    function getURL() {
        url = window.location.href;
        const url_arr = url.split("/");
        snap_token = url_arr[8];
        return snap_token;
    }

    function openSnap(){
        $snap_token = getURL();
        // window.snap.pay($snap_token);
        window.snap.pay($snap_token, {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here *
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })

        
    }
    </script>
  
</body>
</html>
   

