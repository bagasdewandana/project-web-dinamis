<?php 
	require_once '../../koneksi/koneksi.php';
	if (isset($_POST['btn_submit'])) {
		$nama_siswa 	= $_POST['nama_siswa'];
		$nis_siswa 		= $_POST['nis_siswa'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$agama_siswa	= $_POST['agama_siswa'];
		$no_telp		= $_POST['no_telp'];
		$quotes		 	= $_POST['quotes'];

		$query_add = $koneksi->query("INSERT INTO tb_siswa VALUES(NULL, '$nama_siswa','$nis_siswa', '$jenis_kelamin', '$agama_siswa', '$no_telp', '$quotes')");
		if ($query_add) {
			echo "<script>alert('Sukses Tambah Data Siswa!');location.href='../index.php?menu=data_siswa'</script>";
		}
		else{
			echo "<script>alert('Gagal Tambah Data'); location.href='?menu=data_siswa&action=add'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_siswa&action=add');
	}
 ?>