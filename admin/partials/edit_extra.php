<?php 
	$id_extra = $_GET['id_extra'];
	$query_extra = $koneksi->query("SELECT * FROM tb_extra WHERE id_extra = $id_extra");
	$data_extra = $query_extra->fetch_assoc();
 ?>

<h1>Tambah Extra</h1>
<hr>
<form action="partials/proses_edit_extra.php" method="POST">
	<input type="hidden" name="id_extra" value="<?= $id_extra ?>">
	<div class="form-group">
		<label>Nama Extra</label>
		<input type="text" name="nama_extra" value="<?= $data_extra['nama_extra'] ?>">
	</div>
	<div class="form-group">
		<label>Pengajar Extra</label>
		<input type="text" name="pengajar_extra" value="<?= $data_extra['pengajar_extra'] ?>">
	</div>
	<div class="form-group">
		<label>Class Icon Font Awesome</label>
		<input type="text" name="icon_extra" value="<?= $data_extra['icon_extra'] ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Masukan</button>
	</div>
</form>