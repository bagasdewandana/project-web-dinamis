<?php 
	if ($_GET['menu'] == 'data_siswa' && !isset($_GET['action'])) {
		require_once 'data_siswa.php';
	}
	else if ($_GET['menu'] == 'data_siswa' && $_GET['action'] == 'add') {
		require_once 'add_siswa.php';
	}
	else if($_GET['menu'] == 'data_siswa' && $_GET['action'] == 'delete' && isset($_GET['id_siswa'])){
		require_once 'delete_siswa.php';
	}
	else if($_GET['menu'] == 'data_siswa' && $_GET['action'] == 'edit' && isset($_GET['id_siswa'])){
		require_once 'edit_siswa.php';
	}


	else if ($_GET['menu'] == 'data_uangkas' && !isset($_GET['action'])) {
		require_once 'data_uangkas.php';
	}
	else if ($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'add' && !isset($_GET['id_siswa'])){
		require_once 'add_uangkas.php';
	}
	else if ($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'add' && isset($_GET['id_siswa']) && isset($_GET['id_bulan'])){
		require_once 'add_short_uangkas.php';
	}
	else if ($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'delete' && isset($_GET['id_uangkas'])){
		require_once 'delete_uangkas.php';
	}
	else if($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'check' && isset($_GET['id_bulan'])){
		require_once 'check_uangkas.php';
	}
	else if ($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'addPengeluaran'){
		require_once 'add_pengeluaran.php';
	}
	else if ($_GET['menu'] == 'data_uangkas' && $_GET['action'] == 'deletePengeluaran' && isset($_GET['id_pengeluaran'])){
		require_once 'delete_pengeluaran.php';
	}


	else if ($_GET['menu'] == 'data_extra' && !isset($_GET['action'])) {
		require_once 'data_extra.php';
	}
	else if ($_GET['menu'] == 'data_extra' && $_GET['action'] == 'add'){
		require_once 'add_extra.php';
	}
	else if ($_GET['menu'] == 'data_extra' && $_GET['action'] == 'delete' && isset($_GET['id_extra'])){
		require_once 'delete_extra.php';
	}
	else if ($_GET['menu'] == 'data_extra' && $_GET['action'] == 'edit' && isset($_GET['id_extra'])){
		require_once 'edit_extra.php';
	}


	else if ($_GET['menu'] == 'data_mapel' && !isset($_GET['action'])) {
		require_once 'data_mapel.php';
	}
	else if ($_GET['menu'] == 'data_mapel' && $_GET['action'] == 'add'){
		require_once 'add_mapel.php';
	}
	else if ($_GET['menu'] == 'data_mapel' && $_GET['action'] == 'delete' && isset($_GET['id_mapel'])){
		require_once 'delete_mapel.php';
	}
	else if ($_GET['menu'] == 'data_mapel' && $_GET['action'] == 'edit' && isset($_GET['id_mapel'])){
		require_once 'edit_mapel.php';
	}


	else if($_GET['menu'] == 'index'){
		require_once 'dashboard.php';
	}
	else{
		echo "<h1 align='center'>404</h1><h4 align='center'>Not Found</h4>";;
	}
 ?>