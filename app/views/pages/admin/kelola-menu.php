<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Kelola Menu</h3>
  </div>
  <div class="card-body">
    <form action = "<?=BASEURL;?>/admin/kelola_menu/show", method = "POST">
      <div class="form-group-apend">
        <div class="row pb-3">
          <div class="col-md-auto align-self-center">
            <div class="input-group-apend">
              <a href = "<?=BASEURL;?>/admin/kelola_menu/tambah_menu" class="btn btn-sm p-2 text-white"><i class="fa fa-plus-circle mr-2 text-white"></i>TAMBAH MENU</a>
            </div>
          </div>
          <div class="col align-self-center px-0">
            <div class="input-group-prepended ">
              <input type="text" class="form-control" name='search' placeholder="cari berdasarkan nama menu">        
            </div>
          </div>
          <div class="col-md-auto align-self-center">
            <div class="input-group-apend">
              <button type = "submit" class="btn btn-sm p-2 text-white"><i class="fa fa-search mr-2 text-white"></i>SEARCH</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" width = "30px"><p class="title">No</p></th>
          <th class="text-center" width = "80px"><p class="title">Gambar</p></th>
          <th class="text-left" width = "200px"><p class="title">Nama Menu</p></th>
          <th class="text-left"><p class="title">Kategori</p></th>
          <th class="text-center" width = "80px"><p class="title">Terjual</p></th>
          <th class="text-center" width = "80px"><p class="title">Rating</p></th>
          <th class="text-center" width = "120px"><p class="title">Action</p></th>
        </tr>
      </thead>
    </table>
    <div class="table-full-width table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center" width = "30px"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            <th class="text-left"  width = "200px"><p></p></th>
            <th class="text-left"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            <th class="text-center" width = "120px"><p></p></th>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan menu -->
          <?php 
          $menus = $data['menus'];
          $url = BASEURL;
          foreach($menus as $menu){
            $category_name = $menu->category->name;
            echo "
              <tr>
                <td>
                  <p class='text-center'>$menu->id</p>
                </td>
                <td class='text-center'>
                  <img src='$url/img/menus/$menu->image' alt='' height = '40px' width = '40px'>
                </td>
                <td>
                  <p>$menu->title</p>
                </td>
                <td>
                  <p>$category_name</p>
                </td>
                <td>
                  <p class='title text-center'>$menu->sold</p>
                </td>
                <td>
                  <p class='title text-center'>$menu->rating</p>
                </td>
                <td class='td-actions text-center'>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Hapus Kategori'>
                    <a class='text-light' href='$url./admin/kelola_menu/set_stock/$menu->id' style = 'font-size : 16px;'><i class='bi-bag-check' role='img' aria-label='Trash'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Edit Kategori'>
                    <a class='text-light' href='$url./admin/kelola_menu/edit_menu/$menu->id' style = 'font-size : 16px;'><i class='bi-pencil' role='img' aria-label='Pencil'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Hapus Kategori'>
                    <a class='text-light' href='$url./admin/kelola_menu/destroy/$menu->id' style = 'font-size : 16px;'><i class='bi-trash' role='img' aria-label='Trash'></i></a>
                  </button>
                </td>
              </tr>
            ";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>   

<!-- <ol type = "1">
  <li>Masuk WhatsAp group PPDB MTHQ. Hubungi WA <a href="https://api.whatsapp.com/send?phone=6287749181562&text=Hello%2C%20I%20want%20to%20ask%20about%20this%20product">0877-4918-1462</a></li>
  <li>Melakukan transfer biaya pendaftaran sebesar Rp200.000 ke BSI (Bank Syariah Indonesia), No. rekening <a href=""> 1057079758</a>, a/n Panitia MTHQ, Kode Bank 451</li>
  <li>Mengisi Formulir Online Link Pendaftaran <a href="https://gateway.mthq.ponpes.id">https://gateway.mthq.ponpes.id</a> </li>
</ol>

<ol type = "1">
  <li>Masuk WhatsAp group PPDB MTHQ dengan menghubungi <br> WA <a href="https://api.whatsapp.com/send?phone=6287749181562&text=Hello%2C%20I%20want%20to%20ask%20about%20this%20product">0877-4918-1462</a></li>
  <li>Mengisi Formulir Online Link Pendaftaran  <a href="https://gateway.mthq.ponpes.id">https://gateway.mthq.ponpes.id</a> </li>
  <li>Melengkapi Berkas Persyaratan <a herf = "/berkas">lihat di sini</a></li>
</ol> -->
