<div class="container" align="start">
  <!-- breadcrumb -->
  <div class="row mt-4">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link class="text-dark" to="/">Home</router-link>
          </li>
          <li class="breadcrumb-item">
            <router-link class="text-dark" to="/foods">Foods</router-link>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Keranjang
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2>
        Keranjang
        <strong>Saya</strong>
      </h2>
      <div class="table-responsive mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Makanan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Total</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(keranjang, index) in keranjangs" :key="keranjang.id">
              <th>{{ index + 1 }}</th>
              <td>
                <img :src="'/assets/images/' + keranjang.product.gambar" class="img-fluid shadow" width="250" :alt="keranjang.product.gambar" />
              </td>
              <td>
                <strong>{{ keranjang.product.nama }}</strong>
              </td>
              <td>
                {{ keranjang.keterangan ? keranjang.keterangan : '-' }}
              </td>
              <td>{{ keranjang.jumlah_pemesanan }}</td>
              <td>Rp.{{ keranjang.product.harga }}</td>
              <td>
                <strong> Rp.{{ keranjang.jumlah_pemesanan * keranjang.product.harga }} </strong>
              </td>
              <td align="center">
                <b-icon-trash @click="hapusKeranjang(keranjang.id)"></b-icon-trash>
              </td>
            </tr>
            <tr>
              <td colspan="6" align="right">
                <strong>Total Harga :</strong>
              </td>
              <td>
                <strong>Rp.{{ totalHarga }}</strong>
              </td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Form Checkout -->
  <div class="row justify-content-end">
    <div class="col-md-4">
      <form class="mt-4" v-on:submit.prevent>
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" v-model="pesan.nama" />
        </div>
        <div class="form-group">
          <label for="noMeja">Nomor Meja :</label>
          <input type="text" class="form-control" v-model="pesan.noMeja" />
        </div>
        <button type="submit" class="btn btn-success float-right" @click="checkout">
          <b-icon-cart></b-icon-cart>
          Pesan
        </button>
      </form>
    </div>
  </div>
</div>