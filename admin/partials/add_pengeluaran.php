<h1>Tambah Pengeluaran</h1>
<hr>
<form action="partials/proses_add_pengeluaran.php" method="POST">
	<div class="form-group">
		<label>Nama Kebutuhan</label>
		<input type="text" name="nama_kebutuhan">
	</div>
	<div class="form-group">
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
		<label>Jumlah Pengeluaran</label>
		<input type="number" name="jumlah_pengeluaran">
	</div>
	<div class="form-group">
		<button class="btn btn-primary float-right" type="submit" name="btn_submit">Masukan</button>
	</div>
</form>