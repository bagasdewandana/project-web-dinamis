<?php 
	require_once '../koneksi/koneksi.php';
	if (!isset($_SESSION['user_login'])) {
		header('location: ../login.php');
	}
 ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width,intial-scale=1.0" >
    	<title>Login to REPALTI</title>
    	<link rel="stylesheet" type="text/css" href="../css/login.css">
    	<link rel="stylesheet" href="../fontawesome/font-css/css/fontawesome.min.css">
		<link rel="stylesheet" href="../fontawesome/font-css/css/fa-solid.min.css">
		<link rel="stylesheet" href="../fontawesome/font-css/css/fa-regular.min.css">
		<link rel="stylesheet" href="../fontawesome/font-css/css/fa-brands.min.css">
	</head>
	
	<body>
		<div class="wrapper">
			<div class="bg-banner row">
				<div class="col-lg-12">
					<div class="max-content">
						<div class="banner">
							<div class="col-lg-6">
								<div class="img">
									<img src="../img/p-login.png">
								</div><!-- img -->
							</div><!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="form">
									<h1>Halo,</h1>
									<h2>Reset password</h2>
									<form action="" method="POST">
										<div class="form-control">
											<label>Password Lama</label>
											<input type="password" name="old_password" placeholder="Tulis Password lama kamu disini">
										</div>
										<div class="form-control">
											<label>Password Baru</label>
											<input type="password" name="new_password" placeholder="Tulis password baru kamu disini">
										</div>
										<div class="form-control">
											<label> Ulang Password Baru</label>
											<input type="password" name="repeat_new_password" placeholder="Tulis ulang password baru
											 kamu disini">
										</div>
										<a>
											<button id="btnMulai" type="submit" name="btn_submit">Login
							                  <span>
							                    <i class="fas fa-chevron-circle-right" aria-hidden="true"></i>
							                  </span>
							                </button>
										</a>
									</form>
								</div>
							</div><!-- col-lg-6 -->
						</div><!-- banner -->
					</div><!-- max-content -->
				</div><!-- col-lg-12 -->
			</div><!-- bg-banner -->
		</div><!-- wrapper -->
	</body>

</html>