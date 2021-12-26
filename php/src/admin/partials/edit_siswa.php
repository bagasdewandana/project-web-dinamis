<?php 
	if (isset($_GET['id_siswa']) && !is_null($_GET['id_siswa'])) {
		$id_siswa = $_GET['id_siswa'];
		$query_data_siswa = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa");
		if ($query_data_siswa->num_rows > 0) {
			$data_siswa = $query_data_siswa->fetch_assoc();
		}
		else{
			header('location: index.php');
		}
	}
	else{
		header('location: index.php');
	}
	
 ?>

<h1>Edit Data Siswa</h1>
<hr>

<form action="partials/proses_edit_siswa.php" method="POST">
	<input type="hidden" name="id_siswa" value="<?= $data_siswa['id_siswa'] ?>">
	<div class="form-group">
		<label>Nama Siswa</label>
		<input type="text" name="nama_siswa" value="<?= $data_siswa['nama_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>NIS</label>
		<input type="number" name="nis_siswa" value="<?= $data_siswa['nis_siswa'] ?>">
	</div>
	<div class="form-group col-md-6">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin">
			<option value="Laki-laki" <?php echo ($data_siswa['jenis_kelamin'] == 'Laki-laki') ? ' selected' : ''; ?>>Laki-laki</option>
			<option value="Perempuan" <?php echo ($data_siswa['jenis_kelamin'] == 'Perempuan') ? ' selected' : ''; ?>>Perempuan</option>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>Agama</label>
		<select name="agama_siswa">
			<option value="Hindu" <?php echo ($data_siswa['agama_siswa'] == 'Hindu') ? ' selected' : ''; ?>>Hindu</option>
			<option value="Islam" <?php echo ($data_siswa['agama_siswa'] == 'Islam') ? ' selected' : ''; ?>>Islam</option>
			<option value="Kristen Protestan" <?php echo ($data_siswa['agama_siswa'] == 'Kristen Protestan') ? ' selected' : ''; ?>>Kristen Protestan</option>
			<option value="Kristen Katolik" <?php echo ($data_siswa['agama_siswa'] == 'Kristen Katolik') ? ' selected' : ''; ?>>Kristen Katolik</option>
			<option value="Budha" <?php echo ($data_siswa['agama_siswa'] == 'Budha') ? ' selected' : ''; ?>>Budha</option>
		</select>
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="number" name="no_telp" value="<?= $data_siswa['no_telp'] ?>">
	</div>
	<div class="form-group">
		<label>Quotes</label>
		<input type="text" name="quotes" value="<?= $data_siswa['quotes'] ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Ubah</button>
	</div>
</form>