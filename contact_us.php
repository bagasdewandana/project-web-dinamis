<?php 
	require_once 'koneksi/koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="./css/navbar.css">
	<link rel="stylesheet" type="text/css" href="./css/contact_us.css">

	<script src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="grid">
		
			<?php  
	 			require_once('./partials/navbar.inc.php');
	 		?>
		
		<div class="bg-contact row">
			<div class="col-lg-12">
				<div class="bg-content">
					<div class="col-lg-6">
						<div class="bg-content-kiri">
							<div class="bg-gambar">
								<img src="img/mail.png">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="bg-content-kanan">
							<div class="content-kanan">
								<div class="col-lg-12">
									<div class="judul">
										<h1>Contact Us</h1>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="text">
										<p>Isi kolom di bawah dan kami akan menghubungi Anda kembali</p>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="nama">
										<input type="text" placeholder="Nama">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="email">
										<input type="text" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="pesan">
										<textarea placeholder="Pesan"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="btn-kirim">
										<a href="#">Kirim</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--bg-content-->
			</div>
		</div>
	</div><!--grid-->
</div><!--wrapper-->
</body>

</html>