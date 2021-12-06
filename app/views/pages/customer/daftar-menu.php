<div class="container">
      <div class="row mt-4" align="start">
        <div class="col">
          <h2>
            Daftar
            <strong>Makanan</strong>
          </h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <div class="input-group">
            <div class="input-group mb-3">
              <input
                v-model="search"
                type="text"
                class="form-control"
                placeholder="Cari Makanan Kesukan Anda..."
                aria-label="Cari"
                aria-describedby="basic-addon1"
                @keyup="searchFood"
              />
              <span class="input-group-text" id="basic-addon1">
                <a class="text-dark" href="#" style = "font-size : 16px;"><i class="bi-search" role="img" aria-label="Search"></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4" align="start">
        <div
          class="col-md-4 mt-4 d-flex"
          v-for="product in products"
          :key="product.id"
        >
          <div class="card shadow card-product">
            <img
              :src="'/assets/images/' + product.gambar"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">{{ product.nama }}</h5>
              <p class="card-text">Harga: Rp {{ product.harga }}</p>
              <router-link class="btn btn-success" :to="'/foods/'+product.id">
                <b-icon-cart></b-icon-cart>
                Pesan
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>