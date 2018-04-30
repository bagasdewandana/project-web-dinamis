<?php 
	require_once '../../koneksi/koneksi.php';

	if (isset($_POST['btn_submit'])) {
		$id_siswa = $_POST['id_siswa'];
		$id_bulan = $_POST['id_bulan'];
		$query_check = $koneksi->query("SELECT * FROM tb_uangkas WHERE id_siswa = $id_siswa AND id_bulan = $id_bulan");
		if ($query_check->num_rows == 0) {
			$total = 10000;
			$date = date('Y-m-d H:i:s');

			$query_add = $koneksi->query("INSERT INTO tb_uangkas VALUES (NULL, $id_siswa, $id_bulan, $total, '$date')");
			if ($query_add) {
				echo "<script>alert('Sukses Tambah Uangkas'); location.href='../index.php?menu=data_uangkas'</script>";
			}
			else{
				echo "<script>alert('Gagal Tambah Uangkas'); location.href='../index.php?menu=data_uangkas&action=add'</script>";
			}
		}
		else{
			echo "<script>alert('Anda Sudah Bayar Uang Kas'); location.href='../index.php?menu=data_uangkas&action=check&id_bulan=$id_bulan'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_uangkas');
	}
 ?>