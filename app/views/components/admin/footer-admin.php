      </div>
      <footer class="footer" style="padding : 0px 0px 24px 250px;">
        <div class="container">
          <div class="row">
            <div class="col-md-auto" style="padding : 0px 0px 0px 15px;">
              <ul class="nav" style="padding : 0px 0px 0px 0px;">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" style="padding : 0px 0px 0px 0px; font-weight : 550;">
                    © 2021 Kelompok Lorem Ipsum | All rights reserved |
                  </a>
                </li>
              </ul>
            </div>
            <div class="col" style="padding : 2px 15px 0px 0px;">
              <ul class="nav" style="padding : 0px 0px 0px 0px;">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" style="padding : 0px 0px 0px 0px; font-weight : 550;">
                    <marquee width="100%" direction="left">
                      MUHAMMAD AUFA ASMAWY - 20523235@STUDENTS.UII.AC.ID |
                      MUHAMMAD DEVANO ZAIDAN - 20523034@STUDENTS.UII.AC.ID |
                      MUHAMMAD IHSAN SYAFIUL UMAM - 20523217@STUDENTS.UII.AC.ID |
                      MOH. ANANDA PUTRA DWIYANTO - 20523198@STUDENTS.UII.AC.ID |
                      MUHAMMAD FAJAR ANNAUFAL - 18523140@STUDENTS.UII.AC.ID
                    </marquee>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>  
  </div>  
      
  <div class="fixed-plugin" style="top : 89px;">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-info active" data-color="blue"></span>
              <span class="badge filter badge-primary" data-color="primary"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change" style="margin-bottom : 18px;">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
      </ul>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<?= BASEURL; ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>/assets/js/core/popper.min.js"></script>
  <script src="<?= BASEURL; ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= BASEURL; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= BASEURL; ?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= BASEURL; ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= BASEURL; ?>/assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= BASEURL; ?>/assets/demo/demo.js"></script>

  <!-- Sweet Alert -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <?php 
  if(isset($_SESSION['alert'])){
    success_and_error($_SESSION['alert']['message'], $_SESSION['alert']['type']);
    unset($_SESSION['alert']);
  } 
  ?>

  <!-- Chart JS --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>

  <?php 
  // memasukkan string ke dalam script chart
  $dataBulanan = $data['pendapatan_perbulan'];
  // $data=[]
  // $insideData = "";
  // for ($i = 0; $i < count($dataBulanan); $i++) {
  //   $insideData .= $dataBulanan[$i];
  //   $insideData .= ",";
  // 
  echo"
    <script>
      const ct = document.getElementById('chartMonth').getContext('2d');
      const chartMonth = new Chart(ct, {
        type: 'bar',
        data: {
          labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV', 'DES'],
          datasets: [{
            label: 'Rp',
            data: [400000,300000,500000,600000,700000,500000,400000,800000,900000,600000,700000,$dataBulanan[11]],
            backgroundColor:'transparent',
            borderColor:'#11cdef',
            borderWidth: 2
          }]
        },
        options: {
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    ";
  ?>

  <script>
    function alert_warning(message, title, action, location){
      Swal.fire({
        type: 'warning',
        title: title,
        text: message,
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'YA, ' + action,
        cancelButtonText: 'TIDAK',
      }).then((result) => {
        if (result.value) {
          window.location.replace(location);
        }
      })
    }
  </script>
  
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }

        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script> -->
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>