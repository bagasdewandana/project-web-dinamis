<?php 
	require_once '../koneksi/koneksi.php';
	$id_uangkas = $_GET['id_uangkas'];
	$query_delete = $koneksi->query("DELETE FROM tb_uangkas WHERE id_uangkas = $id_uangkas");
	if ($query_delete) {
		header('location: index.php?menu=data_uangkas');
	}
 ?>