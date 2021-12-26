<?php 
	$id_extra = $_GET['id_extra'];
	$query_delete = $koneksi->query("DELETE FROM tb_extra WHERE id_extra = $id_extra");

	if ($query_delete) {
		header('location: index.php?menu=data_extra');
	}
	else{
		echo "Gagal";
	}
 ?>