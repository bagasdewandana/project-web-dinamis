<?php 

	date_default_timezone_set('Asia/Makassar');
	@session_start();
	$db_user = 'bagasdewandana';
	$db_host = '10.0.0.2';
	$db_password = 'Dewandana_03';
	$db_name = 'repalti';
	$koneksi = @new Mysqli($db_host, $db_user, $db_password, $db_name);

	if ($koneksi) {
		
	}
	else{
		echo "Not Conected";
	}
 ?>