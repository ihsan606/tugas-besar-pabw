<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Kelola Kategori</h3>
  </div>
  <div class="card-body">
    <form action = "<?=BASEURL;?>/admin/kelola_kategori/show", method = "POST">
      <div class="form-group-apend">
        <div class="row pb-3">
          <div class="col-md-auto align-self-center">
            <div class="input-group-apend">
              <a href = "<?=BASEURL;?>/admin/kelola_kategori/tambah_kategori" class="btn btn-sm p-2 text-white"><i class="fa fa-plus-circle mr-2 text-white"></i>TAMBAH KATEGORI</a>
            </div>
          </div>
          <div class="col align-self-center px-0">
            <div class="input-group-prepended ">
              <input type="text" class="form-control" name = "search" placeholder="cari berdasarkan nama kategori">        
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
          <th class="text-left"><p class="title">Nama Kategori</p></th>
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
            <th class="text-left"><p></p></th>
            <th class="text-center" width = "120px"><p></p></th>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan kategori -->
          <?php 
          $categories = $data['categories'];
          $url = BASEURL;
          foreach($categories as $category){
            echo "
              <tr>
                <td>
                  <p class='text-center'>$category->id</p>
                </td>
                <td class='text-center'>
                  <img src='$url/img/categories/$category->image' alt='' height = '40px' width = '40px'>
                </td>
                <td>
                  <p>$category->name</p>
                </td>
                <td class='td-actions text-center'>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Edit Kategori'>
                    <a class='text-light' href='$url./admin/kelola_kategori/edit_kategori/$category->id' style = 'font-size : 16px;'><i class='bi-pencil' role='img' aria-label='Pencil'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link px-1' data-original-title='Hapus Kategori'>
                    <a class='text-light' href='$url./admin/kelola_kategori/destroy/$category->id' style = 'font-size : 16px;'><i class='bi-trash' role='img' aria-label='Trash'></i></a>
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