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
                <div class='card shadow card-product' style = 'border-radius: 7px;'>
                  <img src='$url/img/menus/$menu->image' class='card-img-top' alt='...'/ style = 'border-radius: 7px 7px 0px 0px;'>
                  <div class='card-body'>
                    <h5 class='card-title'>$menu->title</h5>";
                    if($menu->discount > 0){
                      echo "<p class='card-text'><strike>Rp $menu->price</strike> $menu->discount% <br>Rp $discount_price</p>";
                    }else{
                      echo "<p class='card-text'>Rp $menu->price</p>";
                    }
                    echo "
                      
                  </div>
                  <div class='row justify-content between mx-3 mb-3'>
                    <div class='col-md px-0'>
                      <a class='btn btn-sm btn-success' href='$url/customer/detail_menu/$menu->slug'>
                        <b-icon-cart></b-icon-cart>
                        Pesan
                      </a>
                    </div>
                    <div class='col-md-auto px-0'>
                      <p class='card-text'>terjual $menu->sold | <i class='bi-star-fill' role='text' aria-label='Star-Fill' style='color: #ffc107;'></i> $menu->rating</p>
                    </div>
                  </div>
                </div>
              <!-- </a> -->
            </div>
          ";
        }
        ?>
        
      </div>
    </div>

    
<!-- <div class='position-absolute bottom-0 start-0 px-3 py-3'>
                        <p class='card-text'>terjual $menu->sold | <i class='bi-star-fill' role='img' aria-label='Star-Fill'></i> $menu->rating</p>
                        <a class='btn btn-sm btn-success' href='$url/customer/detail_menu/$menu->slug'>
                          <b-icon-cart></b-icon-cart>
                          Pesan
                        </a>
                      </div> -->

    
    
    
    