<!-- breadcrumb -->
<div class="row">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-dark" href="<?=BASEURL?>/customer/home">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-dark" href="<?=BASEURL?>/customer/daftar_menu">keranjang</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <strong>Edit Keranjang</strong> 
        </li>
      </ol>
    </nav>
  </div>
</div>

<div class="row row-cols-md-2 row-cols-md-1 mt-2">
  <div class="col-md-auto col-md-6 mb-3">
    <img src="<?=BASEURL?>/img/menus/<?=$data['detail_menu'][0]->image?>" class="img-fluid shadow" alt="..." />
  </div>
  <div class="col-md-6 col-md-auto">
    <h2>
      <strong><?=$data['detail_menu'][0]->title?></strong>
    </h2>
    <hr />
    <h4>
      Harga:
      <strong>Rp <?=$data['detail_menu'][0]->price?></strong>
    </h4>
    <form class="mt-4" action = "<?=BASEURL;?>/customer/keranjang/update/<?=$data['detail_menu'][0]->id?>", method = "POST">
      <div class="form-group mb-4">
        <label for="jumlah">Jumlah Pesanan</label>
        <input type="number" required class="form-control" name="jumlah" placeholder="Masukkan Jumlah Pesanan" value="<?=$data['detail_keranjang']['jumlah']?>"/>
      </div>
      <div class="form-group mb-4">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan"  class="form-control" placeholder="Keterangan seperti: Pedas, Bungkus" style='height: 100px;'><?=$data['detail_keranjang']['keterangan']?></textarea>
      </div>
      <button type="submit" class="btn btn-success">
        <b-icon-cart></b-icon-cart>
        Pesan
      </button>
    </form>
  </div>
</div>

