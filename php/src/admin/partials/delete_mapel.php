<?php 
	$id_mapel = $_GET['id_mapel'];
	$query_delete = $koneksi->query("DELETE FROM tb_mapel WHERE id_mapel = $id_mapel");
	if ($query_delete) {
		header('location: index.php?menu=data_mapel');
	}
	else{
		echo "<script>alert('Gagal Delete Mapel'); location.href='index.php?menu=data_mapel'</script>";
	}
 ?>