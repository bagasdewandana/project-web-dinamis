<?php 
	require_once '../../koneksi/koneksi.php';

	if (isset($_POST['btn_submit'])) {
		$nama_extra 	= $_POST['nama_extra'];
		$pengajar_extra = $_POST['pengajar_extra'];
		$icon_extra 	= $_POST['icon_extra'];

		$query_add = $koneksi->query("INSERT INTO tb_extra VALUES(NULL, '$nama_extra', '$pengajar_extra', '$icon_extra')");
		if ($query_add) {
			echo "<script>alert('Sukses Tambah Extra'); location.href='../index.php?menu=data_siswa'</script>";
		}
		else{
			echo "<script>alert('Gagal Tambah Extra'); location.href='../index.php?menu=data_extra&action=add'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_extra');
	}
 ?>