<?php 
	require_once '../koneksi/koneksi.php';
	if (!isset($_GET['menu'])) {
		header('location: ?menu=index');
	}
	if (!isset($_SESSION['user_login'])) {
		header("location: ../login.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script type="text/javascript" src="js/chart.js"></script>
	<title>Dashboard</title>
</head>
<body>
	<div class="wrapper">
		<section id="navbar">
			<div class="row">
				<div class="col-md-12 bg-navbar">
					<div class="col-md-4">
						<div class="logo">
							<a href="../index.php"><img src="../img/32.png"></a>
						</div>
						<div class="logo-text">
							<a href="../index.php">REPALTI</a>
						</div>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="col-md-6 btn-user">
							<p align="right">Hai <?= $_SESSION['user_login']['username'] ?></p>
						</div>
						<div class="col-md-6 btn-logout">
							<a href="logout.php">Log Out</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="leftmenu">
			<div class="row">
				<div class="col-md-1 bg-leftmenu">
					<div class="menu">
						<ul>
							<li><a href="?menu=index" class="<?php echo ($_GET['menu'] == 'index') ? 'active' : ''; ?>"><i class=" fa fa-dashboard"></i></a></li>
							<li><a href="?menu=data_siswa" class="<?php echo ($_GET['menu'] == 'data_siswa') ? 'active' : ''; ?>"><i class=" fa fa-users"></i></a></li>
							<li><a href="?menu=data_uangkas" class="<?php echo ($_GET['menu'] == 'data_uangkas') ? 'active' : ''; ?>"><i class=" fa fa-money"></i></a></li>
							<li><a href="?menu=data_extra" class="<?php echo ($_GET['menu'] == 'data_extra') ? 'active' : ''; ?>"><i class=" fa fa-desktop"></i></a></li>
							<li><a href="?menu=data_mapel" class="<?php echo ($_GET['menu'] == 'data_mapel') ? 'active' : ''; ?>"><i class=" fa fa-book"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="canvas">
			<div class="row">
				<div class="col-md-12 nav"></div>
				<div class="col-md-1 left"></div>
				<div class="col-md-10 canvas">
					<div class="dashboard">
						<?php 
							require_once 'partials/main.php';
						 ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>