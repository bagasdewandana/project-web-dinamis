<?php 
	require_once '../koneksi/koneksi.php';
 ?>

<h1>Data Uang Kas</h1>
<hr>
<a href="?menu=data_uangkas&action=add" class="btn-info"><i class=" fa fa-plus"></i>  Tambah Uang Kas</a>
<h3>Data Pemasukan</h2>
<table class="siswa" border="1" cellpadding="15px">
	<tr>
		<th>#No</th>
		<th>Nama Siswa</th>
		<th>Bulan</th>
		<th>Tanggal Input</th>
		<th>Jumlah</th>
		<th>Action</th>
	</tr>

	<?php 
		$query_uangkas = $koneksi->query("SELECT * FROM tb_uangkas as a INNER JOIN tb_siswa as b ON a.id_siswa = b.id_siswa ORDER BY a.id_bulan ASC");
		if ($query_uangkas->num_rows > 0) {
			$no = 1;
			$total_uangkas = 500000;
			while ($data_uangkas = $query_uangkas->fetch_assoc()) {
				$bulan = $data_uangkas['id_bulan'];
				$id_bulan = $data_uangkas['id_bulan'];
				if ($bulan == 1) {
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Januari</a>";
				}
				else if ($bulan == 2){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Februari</a>";
				}
				else if ($bulan == 3){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Maret</a>";
				}
				else if ($bulan == 4){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>April</a>";
				}
				else if ($bulan == 5){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Mei</a>";
				}
				else if ($bulan == 6){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Juni</a>";
				}
				else if ($bulan == 7){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Juli</a>";
				}
				else if ($bulan == 8){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Agustus</a>";
				}
				else if ($bulan == 9){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>September</a>";
				}
				else if ($bulan == 10){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Oktober</a>";
				}
				else if ($bulan == 11){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>November</a>";
				}
				else if ($bulan == 12){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Desember</a>";
				}
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data_uangkas['nama_siswa'] ?></td>
					<td><?= $bulan ?></td>
					<td><?= date('d-m-Y', strtotime($data_uangkas['date_uangkas'])) ?></td>
					<td>Rp. <?= number_format($data_uangkas['jumlah']) ?></td>
					<td><a href="?menu=data_uangkas&action=delete&id_uangkas=<?= $data_uangkas['id_uangkas'] ?>" class="btn-danger">Hapus</a></td>
				</tr>
				<?php
				$no++;
				$total_uangkas+=$data_uangkas['jumlah'];
			}
			?>
			<tr class="dark">
			 	<td colspan="4">Total Uang Kas</td>
			 	<td colspan="2">Rp. <?= number_format($total_uangkas) ?></td>
			 </tr>
			<?php
		}
		else{
			?>
			<tr>
				<td colspan="6"><b>Tidak Ada Data</b></td>
			</tr>
			<?php
		}
	 ?>
</table>

<hr>
<a href="?menu=data_uangkas&action=addPengeluaran" class="btn-info"><i class=" fa fa-plus"></i>   Tambah Pengeluaran</a>
<h3>Data Pengeluaran</h2>
<table class="siswa" border="1" cellpadding="15px">
	<tr>
		<th>#No</th>
		<th>Nama Kebutuhan</th>
		<th>Bulan</th>
		<th>Jumlah</th>
		<th>Action</th>
	</tr>
	<?php 
		$query_pengeluaran = $koneksi->query("SELECT * FROM tb_pengeluaran");
		if ($query_pengeluaran->num_rows > 0) {
			$no = 1;
			$total_pengeluaran = 0;
			while ($data_pengeluaran = $query_pengeluaran->fetch_assoc()) {
				$bulan = $data_pengeluaran['id_bulan'];
				$id_bulan = $data_pengeluaran['id_bulan'];
				if ($bulan == 1) {
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Januari</a>";
				}
				else if ($bulan == 2){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Februari</a>";
				}
				else if ($bulan == 3){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Maret</a>";
				}
				else if ($bulan == 4){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>April</a>";
				}
				else if ($bulan == 5){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Mei</a>";
				}
				else if ($bulan == 6){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Juni</a>";
				}
				else if ($bulan == 7){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Juli</a>";
				}
				else if ($bulan == 8){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Agustus</a>";
				}
				else if ($bulan == 9){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>September</a>";
				}
				else if ($bulan == 10){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Oktober</a>";
				}
				else if ($bulan == 11){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>November</a>";
				}
				else if ($bulan == 12){
					$bulan = "<a href='?menu=data_uangkas&action=check&id_bulan=$bulan'>Desember</a>";
				}
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data_pengeluaran['nama_kebutuhan'] ?></td>
					<td><?= $bulan ?></td>
					<td>Rp. <?= number_format($data_pengeluaran['jumlah_pengeluaran']) ?></td>
					<td><a href="?menu=data_uangkas&action=deletePengeluaran&id_pengeluaran=<?= $data_pengeluaran['id_pengeluaran'] ?>" class="btn-danger">Hapus</a></td>
				</tr>
				<?php
				$total_pengeluaran+=$data_pengeluaran['jumlah_pengeluaran'];
			}
			?>
			<tr class="dark">
				<td colspan="3">Total Pengeluaran</td>
				<td colspan="2">Rp. <?= number_format($total_pengeluaran) ?></td>
			</tr>
			<?php
		}
		else{
			?>
			<tr>
				<td colspan="5"><b>Tidak Ada Data</b></td>
			</tr>
			<?php
		}
	 ?>
</table>

<?php 
	if (@is_null($total_pengeluaran)) {
		$total_pengeluaran = 0;
	}
	@$sisa_uangkas = $total_uangkas - $total_pengeluaran;
 ?>
<hr>

<h3>Data Valid</h3>
<table class="siswa" border="1" cellpadding="15px">
	<tr class="dark">
		<td align="left">Uang Kas Yang Didapat</td>
		<td>Rp. <?= number_format(@$total_uangkas) ?></td>
	</tr>
	<tr class="dark">
		<td align="left">Pengeluaran</td>
		<td>Rp. <?= number_format($total_pengeluaran) ?></td>
	</tr>
	<tr class="dark">
		<td align="left">Sisa Uangkas</td>
		<td>Rp. <?= number_format($sisa_uangkas) ?></td>
	</tr>
</table>