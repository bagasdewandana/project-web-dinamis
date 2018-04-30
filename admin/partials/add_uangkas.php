<h1>Tambah Uang Kas</h1>
<hr>
<form action="partials/proses_add_uangkas.php" method="POST">
	<div class="form-group col-md-6">
		<label>Nama Siswa</label>
		<select name="id_siswa">
			<?php 
				$query_siswa = $koneksi->query("SELECT * FROM tb_siswa");
				if ($query_siswa->num_rows > 0) {
					while($data_siswa = $query_siswa->fetch_assoc()){
						?>
						<option value="<?= $data_siswa['id_siswa'] ?>"><?= $data_siswa['nama_siswa'] ?></option>
						<?php
					}
				}
				else{
					?>
					<option>-- Tidak Ada Data --</option>
					<?php
				}
			 ?>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label>Bulan</label>
		<select name="id_bulan">
			<option value="1">Januari</option>
			<option value="2">Februari</option>
			<option value="3">Maret</option>
			<option value="4">April</option>
			<option value="5">Mei</option>
			<option value="6">Juni</option>
			<option value="7">Juli</option>
			<option value="8">Agustus</option>
			<option value="9">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Masukan</button>
	</div>
</form>