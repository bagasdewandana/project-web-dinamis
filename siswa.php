<?php 
	require_once 'koneksi/koneksi.php';
	if (!isset($_SESSION['user_login'])) {
		header("location: ../login.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Siswa</title>
 	<link rel="stylesheet" type="text/css" href="css/siswa.css">
 	<link rel="stylesheet" type="text/css" href="css/navbar.css">
 <body>
 <div class="wrapper">
 	
 	<div class="grid">
 		<div class="bg-table row">
 			<div class="col-lg-12">
 				<h1>Data Siswa</h1>
 				<table class="tb-siswa" >
	 				<tr>
	 					<th>No</th>
	 					<th>Nama</th>
	 					<th>Nis</th>
	 					<th>Jenis Kelamin</th>
	 					<th>Agama</th>
	 					<th>No Telepon</th>
	 				</tr>
	 				<?php 
	 					$query_siswa =  $koneksi->query("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");
	 					$nomor = 1;
	 					if ($query_siswa->num_rows > 0) {
	 						while ($data_siswa = $query_siswa->fetch_assoc()) {
	 							?>
	 								<tr>
	 									<td><?= $nomor ?></td>
	 									<td><?= $data_siswa['nama_siswa'] ?></td>
	 									<td><?= $data_siswa['nis_siswa'] ?></td>
	 									<td><?= $data_siswa['jenis_kelamin'] ?></td>
	 									<td><?= $data_siswa['agama_siswa'] ?></td>
	 									<td><?= $data_siswa['no_telp'] ?></td>
	 								</tr>
	 							<?php
	 						$nomor++;
	 						}
	 					}
	 				 ?>
	 			</table>
 			</div>
 		</div><!--bg-table-->
 	</div><!--grid-->
 </div><!--wrapper-->
 </body>
 </html>
