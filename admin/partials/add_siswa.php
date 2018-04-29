<h1>Tambah Data Siswa</h1>
<hr>
<form action="partials/proses_add_siswa.php" method="POST">
	<div class="form-group">
		<label>Nama Siswa</label>
		<input type="text" name="nama_siswa">
	</div>
	<div class="form-group">
		<label>NIS</label>
		<input type="number" name="nis_siswa">
	</div>
	<div class="form-group col-md-6">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>Agama</label>
		<select name="agama_siswa">
			<option value="Hindu">Hindu</option>
			<option value="Islam">Islam</option>
			<option value="Kristen Protestan">Kristen Protestan</option>
			<option value="Kristen Katolik">Kristen Katolik</option>
			<option value="Budha">Budha</option>
		</select>
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="number" name="no_telp">
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Masukan</button>
	</div>
</form>