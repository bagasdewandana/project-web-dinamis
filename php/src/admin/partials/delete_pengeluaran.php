<?php 
	require_once '../koneksi/koneksi.php';

	$id_pengeluaran = $_GET['id_pengeluaran'];

	$query_delete = $koneksi->query("DELETE FROM tb_pengeluaran WHERE id_pengeluaran = $id_pengeluaran");
	if ($query_delete) {
		header('location: ?menu=data_uangkas');
	}
	else{
		echo "<script>alert('Gagal Delete Pengeluaran'); location.href='?menu=data_uangkas'</script>";
	}
 ?>