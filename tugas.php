<?php 
	require_once 'koneksi/koneksi.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<title>Repalti</title>
	<link rel="icon" href="img/31.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/tugas.css?v=0.1" type="text/css">
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

 		 <div class="bg-tugas row">
 		 	<div class="col-lg-12 col-md-12 col-sm-12 ">
 		 		<div class="max-content">
 		 			<div class="tugas">
 		 				<div class="col-lg-6 col-md-6 col-sm-12">
 		 					<div class="col-lg-6">
 		 						<div class="todo">
 		 							<i class="fas fa-code"></i>
 		 							<h1>Project - Web Dinamis</h1>
 		 							<h2>14 Mei 2018</h2>
 		 						</div>
 		 					</div><!-- col-lg-6 -->
 		 					<div class="col-lg-6">
 		 						<div class="todo">
 		 							<i class="fab fa-java"></i>
 		 							<h1>Project - PBO</h1>
 		 							<h2>22 Mei 2018</h2>
 		 						</div>
 		 					</div><!-- col-lg-6 -->
	 		 			</div><!-- col-lg-md-6 sm-12 -->
	 		 			<div class="col-lg-6 col-md-6 col-sm-12">
	 		 				<form accept="todo.php" method="POST">
	 		 					<div class="todo_add">
	 		 						<label>Font Awesome Icon</label>
	 		 						<input type="text" name="fa">
	 		 					</div><!-- todo_add -->
	 		 				</form>
	 		 			</div><!-- col-lg-md-6 sm-12 -->
 		 			</div><!-- tugas -->
 		 		</div><!-- max-content -->
 		 	</div><!-- col-lg-12 -->
 		 </div><!-- bg-tugas -->

 	</div><!-- wrapper -->
 </body>
 </html>