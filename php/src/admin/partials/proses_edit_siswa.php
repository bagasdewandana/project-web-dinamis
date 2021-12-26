<?php 
	require_once '../../koneksi/koneksi.php';
	if (isset($_POST['btn_submit'])) {
		$id_siswa		= $_POST['id_siswa'];
		$nama_siswa 	= $_POST['nama_siswa'];
		$nis_siswa 		= $_POST['nis_siswa'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$agama_siswa 	= $_POST['agama_siswa'];
		$no_telp 		= $_POST['no_telp'];
		$quotes		 	= $_POST['quotes'];

		$query_update = $koneksi->query("UPDATE tb_siswa SET nama_siswa='$nama_siswa', nis_siswa='$nis_siswa', jenis_kelamin='$jenis_kelamin', agama_siswa = '$agama_siswa', no_telp='$no_telp', quotes='$quotes' WHERE id_siswa = $id_siswa");
		if ($query_update) {
			echo "<script>alert('Edit Data Berhasil!');location.href='../index.php?menu=data_siswa'</script>";
		}
		else{
			echo "<script>alert('Edit Data Gagal!');location.href='../index.php?menu=data_siswa'</script>";
		}
	}
	else{
		header('location: ../index.php');
	}
 ?>