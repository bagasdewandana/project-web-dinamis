<?php 
	if ($_GET['menu'] == 'index' && !isset($_GET['action'])) {
		require_once 'dashboard.php';
	}
	else{
		echo "<h2 align='center'>404</h2><br><p align='center'>Not Found</p>";
	}
 ?>