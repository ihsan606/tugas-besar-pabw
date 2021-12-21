<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Laporan Menu</h3>
  </div>
  <div class="card-body">
    <form action = "<?=BASEURL;?>/admin/laporan_menu/show", method = "POST">
      <div class="form-group-apend">
        <div class="row pb-3">
          <div class="col align-self-center pr-0">
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
          <th class="text-left"><p class="title">Nama Menu</p></th>
          <th class="text-center" width = "80px"><p class="title">Terjual</p></th>
          <th class="text-center" width = "80px"><p class="title">Rating</p></th>
        </tr>
      </thead>
    </table>
    <div class="table-full-width table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center" width = "30px"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            <th class="text-left"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            <th class="text-center" width = "80px"><p></p></th>
            </tr>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan laporan menu -->
          <?php 
          $menus = $data['menus'];
          $url = BASEURL;
          for($i = 0; $i < count($menus); $i++){
            $menu = $menus[$i];
            $no = $i + 1; 
            echo "
              <tr>
                <td>
                  <p class='text-center'>$no</p>
                </td>
                <td class='text-center'>
                  <img src='$url/img/menus/$menu->image' alt='' height = '40px' width = '40px'>
                </td>
                <td>
                  <p>$menu->title</p>
                </td>
                <td>
                  <p class='title text-center'>$menu->sold</p>
                </td>
                <td>
                  <p class='title text-center'>$menu->rating</p>
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
