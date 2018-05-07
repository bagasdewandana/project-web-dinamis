<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repalti</title>
    <link rel="icon" href="img/31.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=0.1" type="text/css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-solid.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-solid.min.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-regular.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-regular.min.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-brands.css">
    <link rel="stylesheet" href="fontawesome/font-css/css/fa-brands.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.min.js"> </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/JQUERY%20Main.js"></script>
  </head>

  <body>
    <div class="wrapper">
      <?php 
        require_once 'partials/navbar.inc.php';
      ?>
      <div class="to-top">
        <i class="fas fa-angle-double-up" aria-hidden="true"></i>
      </div>
      <div class="bg-hero">
        <div class="max-content">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hero">

              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="black" src="img/3-black.png">
                <h2>Barbaric people is here mate !</h2>
                <p>Ingin mengetahui REPALTI lebih jauh ?</p>
                <a href="#" id="btnMulai">Mulai
                  <span>
                    <i class="fas fa-angle-double-down" aria-hidden="true"></i>
                  </span>
                </a>
              </div><!-- col-lg-6 -->

              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="gif" src="img/focus.gif">
              </div><!-- col-lg-6 -->

            </div><!-- hero -->
          </div><!-- col-lg-12 -->
        </div><!-- max-content -->
      </div><!-- bg-hero -->  

      <div class="bg-statement row">
        <div class="max-content">
          <div class="col-lg-12 col-md-12 col-sm-12 animatedParent">
            <div class="statement">
              <div class="next">
                <a href="#" id="next-kelas">
                  <i class="fas fa-angle-double-down" aria-hidden="true"></i>
                  <span>
                    Next
                  </span>
                </a>
              </div>
              <h1 class="animated fadeInDown">Sifat Kami</h1>
              <div class="col-lg-4 col-md-6 col-sm-12 animatedParent">
                <div class="c-statement animated fadeInLeft">
                 <i class="fab fa-grav"></i>
                 <h2>Genius</h2>
                 <div class="s-overlay">
                   <p>Mampu berpikir sesuai dengan keadaan</p>
                 </div>
                </div><!-- c-statement -->
              </div><!-- col-lg-4 -->
              <div class="col-lg-4 col-md-6 col-sm-12 animatedParent">
                <div class="c-statement animated fadeInUp">
                  <i class="fas fa-hand-peace"></i>
                  <h2>Humble</h2>
                  <div class="s-overlay">
                   <p>Ramah dan saling menghormati</p>
                 </div>
                </div><!-- c-statement -->
              </div><!-- col-lg-4 -->
              <div class="col-lg-4 col-md-12 col-sm-12 animatedParent">
                <div class="c-statement animated fadeInRight">
                  <i class="fas fa-people-carry"></i>
                  <h2>Brotherhood</h2>
                  <div class="s-overlay">
                   <p>Saling merangkul menjadi saudara</p>
                 </div>
                </div><!-- c-statement -->
              </div><!-- col-lg-4 -->
            </div><!-- statement -->
          </div><!-- col-lg-12 -->
        </div><!-- max-content -->
      </div><!-- bg-statement -->

      <div class="bg-kelas row">
        <div class="max-content">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="kelas">
              <h1 class="animated bounceInDown">XI RPL 3</h1>
              <div class="col-lg-6 col-md-12 col-sm-12 animatedParent">
                <div class="siswa">
                  <img src="img/siswa.png" class="animated bounceInLeft">
                </div>             
                <h2>Jumlah Siswa</h2>
                <hr>
                <h3>
                  <div class="counter" data-count="30">0</div> Siswa
                </h3>
              </div><!-- col-lg-6 -->
              <div class="col-lg-6 col-md-12 col-sm-12 animatedParent">
                <div class="siswa">
                  <img src="img/guru.png" class="animated bounceInRight">
                </div>             
                <h2>Wali Kelas</h2>
                <hr>   
                <h3>Puji Aksama</h3>
              </div><!-- col-lg-6 -->

            </div><!-- kelas -->
          </div><!-- col-lg-12 -->
        </div><!-- max-content -->
      </div><!-- bg-kelas -->

      <div class="bg-contact row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="max-content">
            <div class="contact">
              <div class="col-lg-6"></div>
              <div class="col-lg-6"></div>
            </div><!-- contact -->
          </div><!-- max-content -->
        </div><!-- col-lg-md-sm-12 -->
      </div><!-- bg-contact -->
    
    </div><!-- wrapper -->

    <!-- scroll to down -->
    <script type="text/javascript">
      $(document).ready(function(){
        $btnMulai = $('#btnMulai');
        $statement = $('.bg-statement');
        $statement_offset = $statement.offset().top;
        $btnMulai.click(function(){
          $('html, body').animate({scrollTop:$statement_offset}, 1000);
        });
      });
    </script>
    <!-- scroll to down -->

    <script type="text/javascript">
      $(document).ready(function(){
        $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
        $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
        $menu_line.css({'background-color': 'black'});
        $bg_menu_li.css({'color':'black'});
      });
      $(window).scroll(function(){
        $bg_menu = $('.bg-menu');
        $wScroll = $(window).scrollTop();
        $menu_height = $bg_menu.outerHeight();
        $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
        $top_logo = $('.top-logo');
        $garis = $('.garis');
        $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
        if ($wScroll>$menu_height) {
          $bg_menu_li.css({'color':'white'});
          $garis.css({'background': 'white'});
          $menu_line.css({'background-color': 'white'});
          $bg_menu.css({'background':'#E2B512'});
          $top_logo.css({'background-image':"url(img/3.png)"});
        }
        else{
          $bg_menu_li.css({'color':'#000'});
          $garis.css({'background': '#000'});
          $menu_line.css({'background-color': 'black'});
          $bg_menu.css({'background':'transparent'});
          $top_logo.css({'background-image':"url(img/31.png)"});
        }
      });
    </script>

    <!-- click-to-next -->
    <script type="text/javascript">
      $(document).ready(function(){
        $next_kelas = $('#next-kelas');
        $page_kelas = $('.bg-kelas');
        $next_kelasOffset = $page_kelas.offset().top;
        $next_kelas.click(function(){
          $('html, body').animate({scrollTop:$next_kelasOffset}, 1000);
        });
      });
    </script>

    <!-- back-to-top -->
    <script type="text/javascript">
      $(window).scroll(function(){
        $nav = $('.bg-menu').outerHeight();
        $windowScroll = $(window).scrollTop();
        $to_top = $('.to-top i');
        if ($windowScroll > $nav) {
          $to_top.css({'opacity':'1'});
        }
        else{
          $to_top.css({'opacity':'0'});
        }
      });

      $(document).ready(function(){
        $to_top = $('.to-top i');
        $to_top.click(function(){
          $('html, body').animate({scrollTop:0}, 1000);
        });
      });
    </script>

    <script type="text/javascript" src="css3-animate-it-master/js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/count.js"></script>
  </body>

</html>
  