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
          <form action = "<?=BASEURL;?>/admin/daftar-menu/show", method = "POST">   
            <div class="row row-cols-2">
              <div class="col align-self-center pr-0" style="margin-right: 0px;">
                <div class="input-group input-group-lg mb-3">
                  <input name="search" type="text" class="form-control form-control-m" placeholder="Cari Makanan Kesukan Anda..." aria-label="Cari" aria-describedby="basic-addon1"/>
                </div>
              </div>
              <div class="col-md-auto align-self-center">
                <div class="input-group input-group-lg mb-3">
                  <button type = "submit" class="btn btn-sm p-2 text-dark"> <i class="fa fa-search px-2 text-dark"></i> </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-sm-4 mb-4" align="start">
        <?php
        $menus = $data['menus'];
        $url = BASEURL;
        foreach($menus as $menu){
          $discount_price = $menu->price*(100-$menu->discount)/100;
          echo "
            <div class='col mt-3 d-flex'>
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
    
    
    
    