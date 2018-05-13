<?php 
	require_once 'koneksi/koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Mapel</title>
 	<link rel="stylesheet" type="text/css" href="css/mapel.css">
 	<link rel="stylesheet" type="text/css" href="css/navbar.css">
 	<script src="js/jquery-3.2.1.min.js"> </script>
    <script src="js/jquery-3.2.1.min.js"></script>
 </head>
 <body>
 <div class="wrapper"> 
 	<div class="grid">
 		<?php 
 			require_once 'partials/navbar.inc.php';
 		 ?>
 		<div class="bg-mapel row">
 			<div class="col-lg-12">
 				<div class="mapel">
 					<h1>Mata Pelajaran</h1>
 					<br>
		 			<table class="tb-mapel">
		 				<tr>
		 					<th>No</th>
		 					<th>Nama Mata Pelajaran</th>
		 				</tr>
		 				<?php 
		 					$query_mapel = $koneksi->query("SELECT * FROM tb_mapel");
		 					$no = 1;
		 					if ($query_mapel->num_rows > 0) {
		 						while ($data_mapel = $query_mapel->fetch_assoc()) {
		 							?>
		 								<tr>
		 									<td><?= $no ?></td>
		 									<td><?= $data_mapel['nama_mapel'] ?></td>
		 								</tr>
		 							<?php
		 						$no++;
		 						}
		 					}
		 				 ?>
		 			</table>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 </body>
 </html>