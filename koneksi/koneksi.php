<?php 

	date_default_timezone_set('Asia/Makassar');
	@session_start();
	$db_user = 'root';
	$db_host = 'localhost';
	$db_password = '';
	$db_name = 'db_xi_rpl3';
	$koneksi = @new Mysqli($db_host, $db_user, $db_password, $db_name);

	if ($koneksi) {
		
	}
	else{
		echo "Not Conected";
	}
 ?>