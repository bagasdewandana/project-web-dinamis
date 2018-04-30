<?php 
	require_once '../koneksi/koneksi.php';
	$id_siswa = $_GET['id_siswa'];
	$id_bulan = $_GET['id_bulan'];
	$jumlah = 10000;
	$date = date('Y-m-d H:i:s');

	$query_check = $koneksi->query("SELECT * FROM tb_uangkas WHERE id_siswa = $id_siswa AND id_bulan = $id_bulan");

	if ($query_check->num_rows == 0) {
		$query_add = $koneksi->query("INSERT INTO tb_uangkas VALUES (NULL, $id_siswa, $id_bulan, $jumlah, '$date')");
		if ($query_add) {
			header("location: ?menu=data_uangkas&action=check&id_bulan=$id_bulan");
		}
		else{
			echo "<script>alert('Gagal Tambah Uangkas');location.href='?menu=data_uangkas'</script>";
		}
	}
	else{
		echo "<script>alert('Anda Sudah Bayar Uangkas');location.href='?menu=data_uangkas'</script>";
	}
 ?>