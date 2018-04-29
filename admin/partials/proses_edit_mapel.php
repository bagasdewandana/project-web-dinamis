<?php 
	require_once '../../koneksi/koneksi.php';
	if (isset($_POST['btn_submit'])) {
		$id_mapel = $_POST['id_mapel'];
		$nama_mapel = $_POST['nama_mapel'];
		$query_edit = $koneksi->query("UPDATE tb_mapel SET nama_mapel = '$nama_mapel' WHERE id_mapel = $id_mapel");
		if ($query_edit) {
			echo "<script>alert('Sukses Edit Mapel');location.href='../index.php?menu=data_mapel'</script>";
		}
		else{
			echo "<script>alert('Gagal Edit Mapel');location.href='../index.php?menu=data_mapel'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_mapel');
	}
 ?>