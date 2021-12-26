<?php 
	require_once '../../koneksi/koneksi.php';
	if (isset($_POST['btn_submit'])) {
		$nama_mapel = $_POST['nama_mapel'];
		$query_add = $koneksi->query("INSERT INTO tb_mapel VALUES (NULL, '$nama_mapel')");
		if ($query_add) {
			echo "<script>alert('Sukses Tambah Mapel'); location.href='../index.php?menu=data_mapel'</script>";
		}
		else{
			echo "<script>alert('Gagal Tambah Mapel'); location.href='../index.php?menu=data_mapel?action=add'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_mapel');
	}
 ?>