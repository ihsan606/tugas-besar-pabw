<div class="card card-tasks">
  <div class="card-header ">
    <h3>Kategori</h3>
  </div>
  <div class="card-body ">
    <div class="table-full-width table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th class="text-left" width = "20px"><p class="title">No</p></th>
            <th class="text-left"><p class="title">Nama</p></th>
            <th class="text-center" width = "120px"><p class="title">Action</p></th>
            </tr>
          <tr>
        </thead>
        <tbody>
          <!-- buat perulangan untuk menampilkan kategori -->
          <?php 
          for($i = 0; $i < 10; $i++){
            echo "
              <tr>
                <td>
                  <p>$i</p>
                </td>
                <td>
                  <p class='title'>Update the Documentation</p>
                </td>
                <td class='td-actions text-center'>
                  <button type='button' rel='tooltip' title='' class='btn btn-link' data-original-title='Edit Kategori'>
                    <a class='text-light' href='#' style = 'font-size : 16px;'><i class='bi-pencil' role='img' aria-label='Pencil'></i></a>
                  </button>
                  <button type='button' rel='tooltip' title='' class='btn btn-link' data-original-title='Hapus Kategori'>
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