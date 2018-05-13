<?php 
	require_once 'koneksi/koneksi.php';
	if (!isset($_SESSION['user_login'])) {
		header("location: login.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Siswa/</title>
 	<link rel="stylesheet" type="text/css" href="css/siswa.css">
 	<link rel="stylesheet" type="text/css" href="css/navbar.css">

 	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/siswa.js"></script>
 <body>
 <div class="wrapper">
 	
 	<div class="grid">

 		<?php  
 			require_once('./partials/navbar.inc.php');
 		?>
 		<div class="bg-siswa row">

 			<?php 
 				$query_siswa = $koneksi->query("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");
 				if ($query_siswa->num_rows > 0) {
 					while ($data_siswa = $query_siswa->fetch_assoc()) {
 						?>
 						<div class="col-lg-3 col-md-4 col-sm-12 main-holder">
				 			<div id="main">
					            <div id="image">
					                <img src="img/siswa/user.png"/>
					                <div id="wave"></div>
					                <div id="wave2"></div>
					            </div>
					            
<<<<<<< HEAD
					            <div id="info" class="info<?= $no ?>">
					                <div id="viewMore" class="viewMore<?= $no ?>"><img src="img/siswa/View%20More.png" width="70%"/></div>
					            <div id="info">
					                <div id="viewMore">
					                	<a href="
					                	admin/index.php"><img  src="img/siswa/View%20More.png" width="70%"/></a></div>

=======
					            <div id="info">
					                <div id="viewMore"><img src="img/siswa/View%20More.png" width="70%"/></div>
>>>>>>> parent of 2346a80... adding js siswa
					                <div id="name"><?= $data_siswa['nama_siswa'] ?></div>
					                <div id="status"><?= '" ' . $data_siswa['quotes'] . ' "'?></div>
					                <div id="social">
					                    <img src="img/siswa/Facebook.png"/>
					                    <img src="img/siswa/ig.png"/ width="24px" height="24px" style="margin-top: 10px;">
					                    <img src="img/siswa/Twitter.png"/>
					                </div>
					            </div>
					            
<<<<<<< HEAD

					            <div id="aboutMe" class="aboutMe<?= $no ?>">
=======
					            <div id="aboutMe">
>>>>>>> parent of 2346a80... adding js siswa
					                <h2>ABOUT ME</h2>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					                <div id="close"><img src="img/siswa/Close.png" width="65%"/></div>
					            </div>
					            
					            <div id="project">
					                <h2>PROJECT</h2>
					                <div id="panel1">
					                    <div class="projectImg"><img src="img/siswa/Project1.jpg"/></div>
					                    <div class="projectTitle">DAFT WEB DESIGN</div>
					                    <div class="projectTools">
					                        <div class="visited"><img src="img/siswa/Watch.png"/>120</div>
					                        <div class="like"><img src="img/siswa/Like.png"/>80</div>
					                        <div class="visit"><img src="img/siswa/Visit.png"/></div>
					                    </div>
					                    <hr size="1" width="80%" color="#ccc"/>
					                </div>
					                
					                <div id="panel2">
					                    <div class="projectImg"><img src="img/siswa/Project2.jpg"/></div>
					                    <div class="projectTitle">MOVIE MAGIC</div>
					                    <div class="projectTools">
					                        <div class="visited"><img src="img/siswa/Watch.png"/>90</div>
					                        <div class="like"><img src="img/siswa/Like.png"/>67</div>
					                        <div class="visit"><img src="img/siswa/Visit.png"/></div>
					                    </div>
					                    <hr size="1" width="80%" color="#ccc"/>
					                </div>
					                
					                <div id="panel3">
					                    <div class="projectImg"><img src="img/siswa/Project3.jpg"/></div>
					                    <div class="projectTitle">MULTITECH</div>
					                    <div class="projectTools">
					                        <div class="visited"><img src="img/siswa/Watch.png"/>75</div>
					                        <div class="like"><img src="img/siswa/Like.png"/>56</div>
					                        <div class="visit"><img src="img/siswa/Visit.png"/></div>
					                    </div>
					                </div>
					            </div>
					        </div>
				 		</div><!--col-lg-3 main-holder-->
 						<?php
 					}
 				}
 				else{
 					echo "Tidak Ada Data";
 				}
 			 ?>

 		</div><!--bg-siswa-->
 	</div><!--grid-->
 </div><!--wrapper-->
 </body>
<<<<<<< HEAD
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
 </html>
