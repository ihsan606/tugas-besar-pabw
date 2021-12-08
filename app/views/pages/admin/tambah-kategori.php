<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Tambah Kategori</h3>
  </div>
  <div class="card-body">
    <div class="form-group-apend">
      <div class="row pb-3">
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <a href = "<?= BASEURL ?>/admin/kelola_kategori" class="btn btn-sm p-2 text-white"><i class="bi-arrow-left-circle-fill mr-2 text-white"></i>KEMBALI</a>
          </div>
        </div>
      </div>
    </div>
    <form action = "<?=BASEURL;?>/admin/Tambah_Kategori/store" method = "POST">
      <div class="">
        <label>GAMBAR</label>
        <input type="file" name = "kategori_gambar" class="form-control form-control-md">
      </div>
      <div class="form-group">
        <label>NAMA CATEGORY</label>
        <input type="text" name ="kategori_nama" placeholder="Masukkan Nama Category" class="form-control">
      </div>
      <button class="btn btn-info mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
        SAVE</button>
      <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
        RESET</button>
    </form>
  </div>
</div>   