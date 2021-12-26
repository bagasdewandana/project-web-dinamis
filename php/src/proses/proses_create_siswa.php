<?php 
	require_once'../koneksi/koneksi.php';

	if (isset($_POST['submit'])) {
		$nama_siswa = $koneksi->escape_string($_POST['nama_siswa']);
		$nis_siswa = $koneksi->escape_string($_POST['nis_siswa']);
		$jenis_kelamin = $koneksi->escape_string($_POST['jenis_kelamin']);
		$agama = $koneksi->escape_string($_POST['agama']);
		$no_telepon = $koneksi->escape_string($_POST['no_telepon']);

		$query_check = $koneksi->query("SELECT * FROM tb_siswa WHERE nama_siswa = '$nama_siswa'");
		if ($query_check->num_rows == 0) {
			$query_add_siswa = $koneksi->query("INSERT INTO tb_siswa VALUES(NULL, '$nama_siswa', '$nis_siswa', '$jenis_kelamin', '$agama', '$no_telepon', 'Admin')");
			if ($query_add_siswa) {
				header('location: ../view/show_siswa.php');
			}
			else{
				echo "gagal input data";
			}
		}
		else{
			echo "data sudah ada";
		}
	}
 ?>