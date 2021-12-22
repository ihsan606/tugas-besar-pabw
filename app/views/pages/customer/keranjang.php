<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-_0bji155hJ_YL7Pw"></script>
<!-- breadcrumb -->
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-dark" href="<?=BASEURL?>/customer/home">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-dark" href="<?=BASEURL?>/customer/daftar_menu">Daftar Menu</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <strong>Keranjang</strong> 
        </li>
      </ol>
    </nav>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="table-responsive mt-3">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center" width = "30px"><p class="title">No</p></th>
            <th class="text-center" width = "150px"><p class="title">Gambar</p></th>
            <th class="text-left" width = "200px"><p class="title">Menu</p></th>
            <th class="text-left"><p class="title">Keterangan</p></th>
            <th class="text-left" width = "100px"><p class="title">Jumlah</p></th>
            <th class="text-right" width = "150px"><p class="title">Harga</p></th>
            <th class="text-right" width = "150px"><p class="title">Total</p></th>
            <th class="text-center" style="min-width: 100px!important;"><p class="title">Action</p></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $menus = $_SESSION['keranjang']['menus'];
          $total_harga = 0; 
          // var_dump($menus);
          for($i = 0; $i < count($menus); $i++){
            $menu = $menus[$i];
            $url = BASEURL;
            $id = $menu['menu_id'];
            $no = $i + 1;
            $image = $menu['menu'][0]->image;
            $title = $menu['menu'][0]->title;
            $keterangan = $menu['keterangan'];
            $jumlah = $menu['jumlah'];
            $price = money_format($menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100);
            $total = money_format($jumlah * $menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100);
            $total_harga += $jumlah * $menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100;
            echo"
            <tr>
              <td>$no</td>
              <td><img src='$url./img/menus/$image' class='img-fluid shadow' alt='...' /></td>
              <td>$title</td>
              <td>$keterangan</td>
              <td>$jumlah</td>
              <td>$price</td>
              <td>$total</td>
              <td class='td-actions text-center'>
                <button type='button' rel='tooltip' title='' class='btn btn-icon btn-info px-2 py-1' data-original-title='Edit Kategori'>
                  <a class='text-dark' href='$url./customer/keranjang/edit_keranjang/$id' style = 'font-size : 22px;'><i class='tim-icons icon-pencil text-white'></i></a>
                </button>
                <button type='button' rel='tooltip' title='' class='btn btn-icon btn-danger px-2 py-1' data-original-title='Hapus Kategori'>
                  <a class='text-dark' href='$url./customer/keranjang/destroy/$id' style = 'font-size : 22px;'><i class='tim-icons icon-trash-simple text-white'></i></a>
                </button>
              </td>
            </tr>
            ";
          }
          $_SESSION['keranjang']['total_harga'] = $total_harga;
          ?>
          <?php 
          $total_harga = money_format($_SESSION['keranjang']['total_harga']);
          echo "
          <tr>
            <td colspan='5'></td>
            <td colspan='1' align='left'>Total Harga :</td>
            <td colspan='2'>$total_harga</td>
          </tr>
          "
          ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Form Checkout -->
<div class="row justify-content-end">
  <div class="col-md-4">
    <form action="<?=BASEURL;?>/customer/checkout/store" method="post" class="mt-4" >
      <div class="form-group mb-3">
        <label for="nama">Nama :</label>
        <input type="text" class="form-control" name="customer_name" required>
      </div>
      <div class="form-group mb-3">
        <label for="noMeja">Nomor Meja :</label>
        <input type="text" class="form-control" name="no_meja" required>
      </div>
      <input type="text" class="form-control" value='<?= $_SESSION['keranjang']['total_harga']; ?>' name="grand_total" hidden/>
      
      <button type="submit" class="btn btn-success float-right" >
        <b-icon-cart></b-icon-cart>
        Pesan
      </button>
    </form>
  </div>
</div>
