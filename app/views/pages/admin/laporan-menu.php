<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Laporan Menu</h3>
  </div>
  <div class="card-body">
    <div class="form-group-apend">
      <div class="row pb-3">
        <div class="col align-self-center pr-0">
          <div class="input-group-prepended ">
            <input type="text" class="form-control" placeholder="cari berdasarkan nama menu">        
          </div>
        </div>
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <button class="btn btn-sm p-2"><i class="fa fa-search mr-2 text-white"></i>SEARCH</button>
          </div>
        </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" width = "20px"><p class="title">No</p></th>
          <th class="text-center" width = "70px"><p class="title">Gambar</p></th>
          <th class="text-left"><p class="title">Nama Menu</p></th>
          <th class="text-left" width = "200px"><p class="title">Kategori</p></th>
          <th class="text-center" width = "60px"><p class="title">Terjual</p></th>
          <th class="text-center" width = "60px"><p class="title">Rating</p></th>
        </tr>
      </thead>
    </table>
    <div class="table-full-width table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center" width = "20px"></p></th>
            <th class="text-center" width = "70px"></p></th>
            <th class="text-left"></p></th>
            <th class="text-left" width = "200px"></p></th>
            <th class="text-center" width = "60px"></p></th>
            <th class="text-center" width = "60px"></p></th>
            </tr>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan laporan menu -->
          <?php 
          for($i = 1; $i < 31; $i++){
            echo "
              <tr>
                <td class='text-center'>
                  <p>$i</p>
                </td>
                <td class='text-center'>
                  <img src='' alt='' height = '40px' width = '40px'>
                </td>
                <td>
                  <p class='title'>Menu ke-$i</p>
                </td>
                <td>
                  <p class='title'>Kategori Menu ke-$i</p>
                </td>
                <td>
                  <p class='title text-center'>100</p>
                </td>
                <td>
                  <p class='title text-center'>5</p>
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
