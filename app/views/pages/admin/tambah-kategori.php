<div class="card card-tasks" style = 'height : 100%;'>
  <div class="card-header ">
    <h3 style = "margin : 0px 0px 0px 0px;">Tambah Kategori</h3>
  </div>
  <div class="card-body">
    <div class="form-group-apend">
      <div class="row pb-3">
        <div class="col-md-auto align-self-center">
          <div class="input-group-apend">
            <a href = "<?=BASEURL;?>/admin/kelola_kategori" class="btn btn-sm p-2 text-white"><i class="bi-arrow-left-circle-fill mr-2 text-white"></i>KEMBALI</a>
          </div>
        </div>
      </div>
    </div>
                      <form @submit.prevent="storeProduct">

                  <div class="form-group">
                    <label>GAMBAR</label>
                    <input type="file" @change="handleFileChange" class="form-control">
                    <div v-if="validation.image" class="mt-2">
                      <b-alert show variant="danger">{{ validation.image[0] }}</b-alert>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>NAMA PRODUCT</label>
                        <input type="text" v-model="product.title" placeholder="Masukkan Nama Product"
                          class="form-control">
                        <div v-if="validation.title" class="mt-2">
                          <b-alert show variant="danger">{{ validation.title[0] }}</b-alert>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CATEGORY</label>
                        <select class="form-control" v-model="product.category_id">
                          <option value="">-- select category --</option>
                          <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                        </select>
                        <div v-if="validation.category_id" class="mt-2">
                          <b-alert show variant="danger">{{ validation.category_id[0] }}</b-alert>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>WEIGHT (Gram)</label>
                        <input type="number" v-model="product.weight" placeholder="Masukkan Berat Product (Gram)"
                          class="form-control">
                        <div v-if="validation.weight" class="mt-2">
                          <b-alert show variant="danger">{{ validation.weight[0] }}</b-alert>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>STOCK</label>
                        <input type="number" v-model="product.stock" placeholder="Masukkan Stock Product"
                          class="form-control">
                        <div v-if="validation.stock" class="mt-2">
                          <b-alert show variant="danger">{{ validation.stock[0] }}</b-alert>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>DESCRIPTION</label>
                    <client-only placeholder="loading...">
                      <ckeditor-nuxt v-model="product.description" :config="editorConfig" />
                    </client-only>
                    <div v-if="validation.description" class="mt-2">
                      <b-alert show variant="danger">{{ validation.description[0] }}</b-alert>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>PRICE</label>
                        <input type="number" v-model="product.price" placeholder="Masukkan Harga Product"
                          class="form-control">
                        <div v-if="validation.price" class="mt-2">
                          <b-alert show variant="danger">{{ validation.price[0] }}</b-alert>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>DISCOUNT (%)</label>
                        <input type="number" v-model="product.discount" placeholder="Masukkan Discount Product (%)"
                          class="form-control">
                        <div v-if="validation.discount" class="mt-2">
                          <b-alert show variant="danger">{{ validation.discount[0] }}</b-alert>
                        </div>
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
</div>   