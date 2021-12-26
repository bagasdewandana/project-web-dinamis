<?php 
	require_once '../../koneksi/koneksi.php';
	if (isset($_POST['btn_submit'])) {
		$nama_kebutuhan = $_POST['nama_kebutuhan'];
		$id_bulan = $_POST['id_bulan'];
		$jumlah_pengeluaran = $_POST['jumlah_pengeluaran'];

		$query_add = $koneksi->query("INSERT INTO tb_pengeluaran VALUES (NULL, '$nama_kebutuhan', $id_bulan, $jumlah_pengeluaran)");
		if ($query_add) {
			echo "<script>alert('Sukses Tambah Pengeluaran'); location.href='../index.php?menu=data_uangkas'</script>";
		}
		else{
			echo "<script>alert('Gagal Tambah Pengeluaran'); location.href='../index.php?menu=data_uangkas&action=addPengeluaran'</script>";
		}
	}
	else{
		header('location: ../index.php?menu=data_uangkas&action=addPengeluaran');
	}
 ?>