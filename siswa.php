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
 	<link rel="stylesheet" type="text/css" href="css/main.css">
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
					            
					            <div id="info">
					                <div id="viewMore"><img src="img/siswa/View%20More.png" width="70%"/></div>
					                <div id="name"><?= $data_siswa['nama_siswa'] ?></div>
					                <div id="status">WEB | GRAPHIC | UI/UX</div>
					                <div id="social">
					                    <img src="img/siswa/Facebook.png"/>
					                    <img src="img/siswa/Dribbble.png"/>
					                    <img src="img/siswa/Twitter.png"/>
					                </div>
					            </div>
					            
					            <div id="aboutMe">
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
 </html>
