<div class="row mt-4" align="start">
  <div class="col">
    <h2>
      Detail
      <strong>Menu</strong>
    </h2>
  </div>
</div>
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
    <img src="<?=BASEURL?>/img/menus/<?=$data['detail_menu'][0]->image?>" class="img-fluid shadow" alt="..." />
  </div>
  <div class="col md-6">
    <h2>
      <strong><?=$data['detail_menu'][0]->title?></strong>
    </h2>
    <hr />
    <h4>
      Harga:
      <strong>Rp <?=$data['detail_menu'][0]->price?></strong>
    </h4>
    <form class="mt-4" action = "<?=BASEURL;?>/customer/detail_menu/store/<?=$data['detail_menu'][0]->id?>", method = "POST">
      <div class="form-group mb-4">
        <label for="jumlah">Jumlah Pesanan</label>
        <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Pesanan"/>
      </div>
      <div class="form-group mb-4">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" placeholder="Keterangan seperti: Pedas, Bungkus" style='height: 100px;'></textarea>
      </div>
      <button type="submit" class="btn btn-success">
        <b-icon-cart></b-icon-cart>
        Pesan
      </button>
    </form>
  </div>
</div>
