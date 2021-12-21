<div class="row">

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-primary py-4 px-4 mfe-3">
                    <i class="fas fa-circle-notch fa-spin fa-2x"></i>
                </div>
                <div class="pl-2" style="min-width: 100px;">
                    <div class="text-value text-primary font-weight-bold"><?= $data['pending'] ?></div>
                    <div class="text-primary title text-uppercase font-weight-bold">PENDING</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-success py-4 px-4 mfe-3">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div class="pl-2" style="min-width: 100px;">
                    <div class="text-value text-success font-weight-bold"><?= $data['success'] ?></div>
                    <div class="text-success text-uppercase font-weight-bold">SUCCESS</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-warning py-4 px-4 mfe-3">
                    <i class="fas fa-exclamation-triangle fa-2x"></i>
                </div>
                <div class="pl-2" style="min-width: 100px;">
                    <div class="text-value text-warning font-weight-bold"><?= $data['expired'] ?></div>
                    <div class="text-warning text-uppercase font-weight-bold">EXPIRED</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded shadow-sm overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-danger py-4 px-4 mfe-3">
                    <i class="fas fa-times-circle fa-2x"></i>
                </div>
                <div class="pl-2" style="min-width: 100px;">
                    <div class="text-value text-danger font-weight-bold"><?= $data['failed'] ?></div>
                    <div class="text-danger text-uppercase font-weight-bold">FAILED</div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="card px-3 py-3">
    <table class="table table-esponsive" style="border-collapse:collapse;">
        <thead class="thead-light">
            <tr>
                <th class="text-center" width = "30px">No</th>
                <th class="text-left" width = "300px">Name</th>
                <th class="text-center" width = "70px">No meja</th>
                <th class="text-left"></th>
                <th class="text-center" width = "100px">Daftar Menu</th>
                <th class="text-center" width = "120px">Actions</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php 

            // // foreach($data['orders'] as $order){
            // //     echo $order->table->table;
            // // }
            // // echo $data['invoices'];
            // echo  $no_table = $data['invoices']->orders->table->table;
            for($i = 0; $i < count($data['invoices']); $i++){
                $no = $i + 1;
                $orders = $data['invoices'][$i]->orders;
                $name = $data['invoices'][$i]->customer->name;
                $no_table =  $data['invoices'][$i]->table_id;
                echo"
                <tr>

                    <td class='text-center'>$no</td>
                    <td class=''>$name</td>
                    <td class='text-center'>$no_table</td>
                    <td class=''></td>
                    <td class='text-center'><h2 style='margin-bottom: 0;'><i class='bi-caret-down-fill text-mute accordion-toggle' data-toggle='collapse' data-target='#demo$no'></i></h2></td>

                    <td class='td-actions text-center'>
                        <button type='button' rel='tooltip' class='btn btn-info btn-sm btn-icon'>
                            <i class='tim-icons icon-single-02'></i>
                        </button>
                        <button type='button' rel='tooltip' class='btn btn-success btn-sm btn-icon'>
                            <i class='tim-icons icon-settings'></i>
                        </button>
                        <button type='button' rel='tooltip' class='btn btn-danger btn-sm btn-icon'>
                            <i class='tim-icons icon-simple-remove'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan='12' class='py-0 hiddenRow'>
                        <div class='accordion accordion-flush collapse mx-4' id='demo$no'>
                            <div class='accordion-item'>
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th class='text-center' width = '30px'>no</th>
                                            <th class='text-left' width = '270px'>nama makanan</th>
                                            <th class='text-center' width = '70px'>jumlah</th>
                                            <th class='text-left'>Keterangan</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                ";

                                for($j = 0; $j < count($orders); $j++){
                                    $order = $orders[$j];
                                    $menu = $order->menu->title;
                                    $qty= $order->qty;
                                    $description = $order->description;
                                    $no = $j + 1;
                                    echo"
                                        <tr>
                                            <td class='text-center'>$no</td>
                                            <td class='text-left'>$menu</td>
                                            <td class='text-center'>$qty</td>
                                            <td class='text-left'>$description</td>
                                        </tr>
                                    ";
                                }

                                echo"
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
            ";        
            }
            ?>
            
        </tbody>
    </table>

</div>
