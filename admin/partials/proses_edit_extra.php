<?php 
	require_once '../../koneksi/koneksi.php';

	if (isset($_POST['btn_submit'])) {
		$id_extra 		= $_POST['id_extra'];
		$nama_extra 	= $_POST['nama_extra'];
		$pengajar_extra = $_POST['pengajar_extra'];
		$icon_extra 	= $_POST['icon_extra'];

		$query_update = $koneksi->query("UPDATE tb_extra SET nama_extra = '$nama_extra', pengajar_extra = '$pengajar_extra', icon_extra = '$icon_extra' WHERE id_extra = $id_extra");
		if ($query_update) {
			echo "<script>alert('Sukses Edit Extra'); location.href='../index.php?menu=data_extra'</script>";
		}
		else{
			echo "<script>alert('Gagal Edit Extra'); location.href='../index.php?menu=data_extra'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_extra');
	}
 ?>