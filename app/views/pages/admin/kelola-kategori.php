<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Kelola Kategori</h3>
  </div>
  <div class="card-body">
   
    <div class="form-group-apend">
      <div class="row pb-3">
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <button class="btn btn-sm p-2"><i class="fa fa-plus-circle mr-2"></i>TAMBAH KATEGORI</button>
          </div>
        </div>
        <div class="col align-self-center px-0">
          <div class="input-group-prepended ">
            <input type="text" class="form-control" placeholder="cari berdasarkan nama kategori">        
          </div>
        </div>
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <button class="btn btn-sm p-2"><i class="fa fa-search mr-2"></i>SEARCH</button>
          </div>
        </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th class="text-left" width = "20px"><p class="title">No</p></th>
          <th class="text-left"><p class="title">Nama Kategori</p></th>
          <th class="text-center" width = "120px"><p class="title">Action</p></th>
        </tr>
      </thead>
    </table>
    <div class="table-full-width table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-left" width = "20px"></p></th>
            <th class="text-left"></p></th>
            <th class="text-center" width = "120px"></p></th>
            </tr>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan kategori -->
          <?php 
          for($i = 1; $i < 31; $i++){
            echo "
              <tr>
                <td>
                  <p>$i</p>
                </td>
                <td>
                  <p class='title'>Kategori ke-$i</p>
                </td>
                <td class='td-actions text-center'>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Edit Kategori'>
                    <a class='text-light' href='#' style = 'font-size : 16px;'><i class='bi-pencil' role='img' aria-label='Pencil'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Hapus Kategori'>
                    <a class='text-light' href='#' style = 'font-size : 16px;'><i class='bi-trash' role='img' aria-label='Trash'></i></a>
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