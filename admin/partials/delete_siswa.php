<?php 
	$id_siswa = $_GET['id_siswa'];
	$query_delete = $koneksi->query("DELETE FROM tb_siswa WHERE id_siswa = $id_siswa");
	if ($query_delete) {
		header('location: ?menu=data_siswa');
	}
 ?>