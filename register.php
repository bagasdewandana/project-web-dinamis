<?php 
	require_once 'koneksi/koneksi.php';
 ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width,intial-scale=1.0" >
    	<title>Login to REPALTI</title>
    	<link rel="stylesheet" type="text/css" href="css/register.css">
    	<link rel="stylesheet" href="fontawesome/font-css/css/fontawesome.min.css">
		<link rel="stylesheet" href="fontawesome/font-css/css/fa-solid.min.css">
		<link rel="stylesheet" href="fontawesome/font-css/css/fa-regular.min.css">
		<link rel="stylesheet" href="fontawesome/font-css/css/fa-brands.min.css">
	</head>
	
	<body>
		<div class="wrapper">
			<div class="bg-banner row">
				<div class="col-lg-12">
					<div class="max-content">
						<div class="banner">
							<div class="col-lg-6">
								<div class="form">
									<h1>Halo,</h1>
									<h2>Bergabunglah Menjadi Manusia Barbar !</h2>
									<form action="" method="POST">
										<div class="form-control">
											<label>E-Mail</label>
											<input type="email" name="email_user" placeholder="Tulis email kamu disini" required>
										</div>
										<div class="form-control">
											<label>Username</label>
											<input type="text" name="username" placeholder="Tulis Nama Samaran kamu disini" required>
										</div>
										<div class="form-control">
											<label>Password</label>
											<input type="password" name="password" placeholder="Tulis password kamu disini" required>
										</div>
										<div class="form-control">
											<label>Ulang Password</label>
											<input type="password" name="repeat_password" placeholder="Tulis password kamu disini" required>
										</div>
										<a>
											<button id="btnMulai" type="submit" name="btn_submit">Register
							                  <span>
							                    <i class="fas fa-chevron-circle-right" aria-hidden="true"></i>
							                  </span>
							                </button>
										</a>
										<?php 
											if (isset($_POST['btn_submit'])) {
												$email_user = $koneksi->real_escape_string($_POST['email_user']);
												$username = $koneksi->real_escape_string($_POST['username']);
												$password = $koneksi->real_escape_string($_POST['password']);
												$repeat_password = $koneksi->real_escape_string($_POST['repeat_password']);

												$query_check = $koneksi->query("SELECT * FROM tb_user WHERE email_user='$email_user'");
												if ($query_check->num_rows == 0) {
													$query_check = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
													if ($query_check->num_rows == 0) {
														if ($password == $repeat_password) {
															$password_hash = password_hash($password, PASSWORD_BCRYPT, array('cost'=>11));
															$query_add = $koneksi->query("INSERT INTO tb_user VALUES (NULL, '$email_user', '$username', '$password_hash', 'Member')");
															if ($query_add) {
																echo "<script>alert('Berhasil Membuat Akun');location.href='login.php'</script>";
															}
															else{
																echo "<script>alert('Gagal Membuat Akun')</script>";
															}
														}
														else{
															echo "<script>alert('Password Anda Tidak Sama')</script>";
														}
													}
													else{
														echo "<script>alert('Username Telah Digunakan')</script>";
													}
												}
												else{
													echo "<script>alert('Email Sudah Ada')</script>";
												}
											}
										 ?>
									</form>
								</div>
							</div><!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="img">
									<img src="img/p-register.png">
								</div><!-- img -->
							</div><!-- col-lg-6 -->
						</div><!-- banner -->
					</div><!-- max-content -->
				</div><!-- col-lg-12 -->
			</div><!-- bg-banner -->
		</div><!-- wrapper -->
	</body>

</html>