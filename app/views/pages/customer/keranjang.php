<div class="container" align="start">
  <div class="row mt-4" align="start">
    <div class="col">
      <h2>
        Keranjang
        <strong>Saya</strong>
      </h2>
    </div>
  </div>
  <!-- breadcrumb -->
  <div class="row mt-4">
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
              <th class="text-center" width = "150px"><p class="title">Action</p></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $menus = $_SESSION['keranjang']['menus'];
            $total_harga = 0; 
            foreach($menus as $menu){
              $url = BASEURL;
              $id = $menu['menu_id'];
              $image = $menu['menu'][0]->image;
              $title = $menu['menu'][0]->title;
              $keterangan = $menu['keterangan'];
              $jumlah = $menu['jumlah'];
              $price = money_format($menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100);
              $total = money_format($jumlah * $menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100);
              $total_harga += $jumlah * $menu['menu'][0]->price*(100-$menu['menu'][0]->discount)/100;
              echo"
              <tr>
                <td>$id</td>
                <td><img src='$url./img/menus/$image' class='img-fluid shadow' alt='...' /></td>
                <td>$title</td>
                <td>$keterangan</td>
                <td>$jumlah</td>
                <td>$price</td>
                <td>$total</td>
                <td class='td-actions text-center'>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Edit Kategori'>
                    <a class='text-dark' href='$url./customer/keranjang' style = 'font-size : 20px;'><i class='bi-pencil' role='img' aria-label='Pencil'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Hapus Kategori'>
                    <a class='text-dark' href='$url./customer/keranjang' style = 'font-size : 20px;'><i class='bi-trash' role='img' aria-label='Trash'></i></a>
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
      <form class="mt-4" v-on:submit.prevent>
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" v-model="pesan.nama" />
        </div>
        <div class="form-group">
          <label for="noMeja">Nomor Meja :</label>
          <input type="text" class="form-control" v-model="pesan.noMeja" />
        </div>
        <button type="submit" class="btn btn-success float-right" @click="checkout">
          <b-icon-cart></b-icon-cart>
          Pesan
        </button>
      </form>
    </div>
  </div>
</div>