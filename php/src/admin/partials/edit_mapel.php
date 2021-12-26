<?php 
	$id_mapel = $_GET['id_mapel'];
	$query_mapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
	$data_mapel = $query_mapel->fetch_assoc();
 ?>

<h1>Edit Mapel</h1>
<hr>
<form action="partials/proses_edit_mapel.php" method="POST">
	<input type="hidden" name="id_mapel" value="<?= $id_mapel ?>">
	<div class="form-group">
		<label>Nama Mapel</label>
		<input type="text" name="nama_mapel" value="<?= $data_mapel['nama_mapel'] ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Masukan</button>
	</div>
</form>