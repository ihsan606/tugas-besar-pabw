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
        <?php
        $menus = $data['menus'];
        $url = BASEURL;
        foreach($menus as $menu){
          $discount_price = $menu->price*(100-$menu->discount)/100;
          echo "
            <div class='col-md-3 mt-3 d-flex'>
              <!--  <a href='$url/customer/detail_menu/$menu->slug' style='text-decoration: none!important;'> -->
                <div class='card shadow card-product'>
                  <img src='$url/img/menus/$menu->image' class='card-img-top' alt='...'/>
                  <div class='card-body'>
                    <h5 class='card-title'>$menu->title</h5>";
                    if($menu->discount > 0){
                      echo "<p class='card-text'><strike>Rp $menu->price</strike> Diskon $menu->discount% <br>Rp $discount_price</p>";
                    }else{
                      echo "<p class='card-text'>Rp $menu->price</p>";
                    }
                    echo "<a class='btn btn-success d-flex-end' href='$url/customer/detail_menu/$menu->slug'>
                      <b-icon-cart></b-icon-cart>
                      Pesan
                    </a>
                  </div>
                </div>
              <!-- </a> -->
            </div>
          ";
        }
        ?>
        
      </div>
    </div>

    