<div class="container" align="start">
  <!-- breadcrumb -->
  <div class="row mt-4">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a class="text-dark" href="<?=BASEURL?>/customer/home">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-dark" href="<?=BASEURL?>/customer/daftar_menu">Daftar Menu</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <strong>Detail Menu</strong> 
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col md-6">
      <img :src="/img/menus/<?=$data['detail_menu'][0]->title?>" class="img-fluid shadow" :alt="product.gambar" />
    </div>
    <div class="col md-6">
      <h2>
        <strong>{{ product.nama }}</strong>
      </h2>
      <hr />
      <h4>
        Harga:
        <strong>Rp {{ product.harga }}</strong>
      </h4>
      <form class="mt-4" v-on:submit.prevent>
        <div class="form-group">
          <label for="jumlah-pesanan">Jumlah Pesanan</label>
          <input type="number" class="form-control" v-model="pesan.jumlah_pemesanan" />
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <textarea v-model="pesan.keterangan" class="form-control" placeholder="Keterangan seperti: Pedas, Bungkus"></textarea>
        </div>
        <button type="submit" class="btn btn-success" @click="pemesanan">
          <b-icon-cart></b-icon-cart>
          Pesan
        </button>
      </form>
    </div>
  </div>
</div>