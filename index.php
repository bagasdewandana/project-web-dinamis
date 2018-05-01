<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0" >
    <title>REPALTI - RPL 3 SMK Ti Bali Global</title>
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
      <div class="bg-hero">
        <div class="max-content">
          <div class="col-lg-12">
            <div class="hero">

              <div class="col-lg-6 animatedParent">
                <img class="black" src="img/3-black.png">
                <h2>Barbaric people is here mate !</h2>
                <p>Ingin mengetahui REPALTI lebih jauh ?</p>
                <a href="#" id="btnMulai">Mulai
                  <span>
                    <i class="fas fa-angle-double-down" aria-hidden="true"></i>
                  </span>
                </a>
              </div><!-- col-lg-6 -->

              <div class="col-lg-6">
                <img class="gif" src="img/focus.gif">
              </div><!-- col-lg-6 -->

            </div><!-- hero -->
          </div><!-- col-lg-12 -->
        </div><!-- max-content -->
      </div><!-- bg-hero -->  

      <div class="bg-statement row">
        <div class="max-content">
          <div class="col-lg-12">
            <div class="statement">
              <h1>Sifat Kami</h1>
              <div class="col-lg-4 animatedParent">
                <div class="c-statement">
                 <i class="fab fa-grav"></i>
                 <h2>Genius</h2>
                 <div class="s-overlay">
                   <p>Mampu berpikir sesuai dengan keadaan</p>
                 </div>
                </div><!-- c-statement -->
              </div><!-- col-lg-4 -->
              <div class="col-lg-4">
                <div class="c-statement">
                  <i class="fas fa-hand-peace"></i>
                  <h2>Humble</h2>
                  <div class="s-overlay">
                   <p>Ramah dan saling menghormati</p>
                 </div>
                </div><!-- c-statement -->
              </div><!-- col-lg-4 -->
              <div class="col-lg-4">
                <div class="c-statement">
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
    
    </div><!-- wrapper -->

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

    <script type="text/javascript" src="css3-animate-it-master/js/css3-animate-it.js"></script>
  </body>

</html>
  