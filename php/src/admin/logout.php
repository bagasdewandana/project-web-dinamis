<?php 
	require_once '../koneksi/koneksi.php';
	session_destroy();
	header('location: ../index.php');
 ?>