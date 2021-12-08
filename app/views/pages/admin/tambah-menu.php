<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Tambah Menu</h3>
  </div>
  <div class="card-body">
    <div class="form-group-apend">
      <div class="row pb-3">
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <a href = "<?= BASEURL ?>/admin/kelola_menu" class="btn btn-sm p-2 text-white"><i class="bi-arrow-left-circle-fill mr-2 text-white"></i>KEMBALI</a>
          </div>
        </div>
      </div>
    </div>
    <form action = "", method = "POST">

      

      <div class="row">
        <div class="col-md-6">
          <div class="">
            <label>GAMBAR</label>
            <input type="file" name = "kategori.gambar" class="form-control form-control-md" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>CATEGORY</label>
            <select class="form-control" v-model="product.category_id">
              <option value="">-- select category --</option>
              <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
            </select>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>NAMA MENU</label>
            <input type="text" name="kategori.title" placeholder="Masukkan Nama Menu" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>DESCRIPTION</label>
            <input type="number" v-model="product.stock" placeholder="Masukkan Deskripsi Menu" class="form-control">
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>PRICE</label>
            <input type="number" v-model="product.price" placeholder="Masukkan Harga Product"
              class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>DISCOUNT (%)</label>
            <input type="number" v-model="product.discount" placeholder="Masukkan Discount Product (%)"
              class="form-control">
          </div>
        </div>
      </div>

      <button class="btn btn-info mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
        SAVE</button>
      <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
        RESET</button>

    </form>
  </div>
</div>   