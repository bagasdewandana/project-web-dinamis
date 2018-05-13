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
					            
					            <div id="info">
					                <div id="viewMore">
					                	<a href="
					                	admin/index.php"><img  src="img/siswa/View%20More.png" width="70%"/></a></div>
					                <div id="name"><?= $data_siswa['nama_siswa'] ?></div>
					                <div id="status"><?= '" ' . $data_siswa['quotes'] . ' "'?></div>
					                <div id="social">
					                    <img src="img/siswa/Facebook.png"/>
					                    <img src="img/siswa/ig.png"/ width="24px" height="24px" style="margin-top: 10px;">
					                    <img src="img/siswa/Twitter.png"/>
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
