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


<div class="card">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>No meja</th>
                <th class="text-left">Daftar Menu</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php 

            foreach($data['invoices']->orders as $orders){
                echo $orders;
            }
            // echo $data['invoices'];
            // echo  $no_table = $data['invoices']->orders->table->table;
            for($i = 0; $i < count($data['invoices']); $i++){
                $no = $i + 1;
                $orders = $data['invoices'][$i]->orders;
                $name = $data['invoices'][$i]->customer->name;
                // $no_table = $data['invoices'][$i]->orders->table->table;
                echo"
                <tr>

                <td class='text-center align-top pt-4 '>$no</td>
                <td class='td-top align-top pt-4'>$name</td>
                <td class='align-top pt-4'></td>
                
                <td class='text-right align-top'>
                    <table class='table'>
                        <thead>
                
                            <tr>
                                <th class='text-left'>no</th>
                                <th class='text-left'>nama makanan</th>
                                <th class='text-left'>jumlah</th>
                                <th class='text-center'>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                ";
                    for($j = 0; $j < count($orders); $j++){
                        echo"
                            <tr>
                                <td class='text-lef'>1</td>
                                <td class='text-left'>Seafood Udang </td>
                                <td class='text-left'>4</td>
                                <td class='text-center'>Tidak pake nasi</td>
                            </tr>
                        ";
                    }
                echo"
                
                        </tbody>
                    </table>
                </td>
                <td class='td-actions text-center align-top pt-4'>
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
            ";        
            }
            ?>
            
        </tbody>
    </table>

</div>