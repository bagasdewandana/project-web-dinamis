<?php 
	require_once '../koneksi/koneksi.php';
	$id_bulan = $_GET['id_bulan'];
	$query_uangkas = $koneksi->query("SELECT * FROM tb_uangkas as a INNER JOIN tb_siswa as b ON a.id_siswa = b.id_siswa WHERE a.id_bulan = $id_bulan");
	$data_uangkas = $query_uangkas->fetch_assoc();
	$bulan = $data_uangkas['id_bulan'];
	if ($bulan == 1) {
		$bulan = "Januari";
	}
	else if ($bulan == 2){
		$bulan = "Februari";
	}
	else if ($bulan == 3){
		$bulan = "Maret";
	}
	else if ($bulan == 4){
		$bulan = "April";
	}
	else if ($bulan == 5){
		$bulan = "Mei";
	}
	else if ($bulan == 6){
		$bulan = "Juni";
	}
	else if ($bulan == 7){
		$bulan = "Juli";
	}
	else if ($bulan == 8){
		$bulan = "Agustus";
	}
	else if ($bulan == 9){
		$bulan = "September";
	}
	else if ($bulan == 10){
		$bulan = "Oktober";
	}
	else if ($bulan == 11){
		$bulan = "November";
	}
	else if ($bulan == 12){
		$bulan = "Desember";
	}
 ?>

<h1>Data Uang Kas Bulan <?= $bulan ?></h1>
<hr>
<a href="?menu=data_uangkas&action=add" class="btn-info"><i class=" fa fa-plus"></i>  Tambah Uang Kas</a>

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
		$id_bulan = $_GET['id_bulan'];
		$query_uangkas = $koneksi->query("SELECT * FROM tb_uangkas as a INNER JOIN tb_siswa as b ON a.id_siswa = b.id_siswa WHERE a.id_bulan = $id_bulan");
		$users = [];
		if ($query_uangkas->num_rows > 0) {
			$no = 1;
			$total_uangkas = 0;
			while ($data_uangkas = $query_uangkas->fetch_assoc()) {

				array_push($users,$data_uangkas['id_siswa']);

				
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
			$strQuery = "SELECT * FROM tb_siswa WHERE id_siswa ";
	
			foreach($users as $user){
				if($users[0] == $user){
					$strQuery .= "!= $user";
				}
				else{
					$strQuery .= " AND id_siswa != $user";	
				}
				
			}


			$query_belumbayar = $koneksi->query($strQuery);
					while($data_belumbayar = $query_belumbayar->fetch_assoc() ){
						?>
							<tr style="background: #CB2C31; color: white;">
								<td><?= $no ?></td>
								<td><?= $data_belumbayar['nama_siswa'] ?></td>
								<td><?= $bulan ?></td>
								<td>-</td>
								<td>Rp. 0</td>
								<td><a href="?menu=data_uangkas&action=add&id_siswa=<?= $data_belumbayar['id_siswa'] ?>&id_bulan=<?= $id_bulan ?>" class="btn-primary">Bayar</a></td>
							</tr>
						<?php
						$no++;
					}

			?>
			<tr style="background: #343A40; color: white">
			 	<td colspan="4">Total Uang Kas bulan <?= $bulan ?></td>
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
<h3>Data Pengeluaran Bulan <?= $bulan ?></h2>
<table class="siswa" border="1" cellpadding="15px">
	<tr>
		<th>#No</th>
		<th>Nama Kebutuhan</th>
		<th>Bulan</th>
		<th>Jumlah</th>
		<th>Action</th>
	</tr>
	<?php 
		$query_pengeluaran = $koneksi->query("SELECT * FROM tb_pengeluaran WHERE id_bulan = $id_bulan");
		if ($query_pengeluaran->num_rows > 0) {
			$no = 1;
			$total_pengeluaran = 0;
			while ($data_pengeluaran = $query_pengeluaran->fetch_assoc()) {
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data_pengeluaran['nama_kebutuhan'] ?></td>
					<td><?= $bulan ?></td>
					<td>Rp. <?= number_format($data_pengeluaran['jumlah_pengeluaran']) ?></td>
					<td><a href="?menu=data_uangkas&action=delete&id_uangkas=<?= $data_uangkas['id_uangkas'] ?>" class="btn-danger">Hapus</a></td>
				</tr>
				<?php
				$total_pengeluaran+=$data_pengeluaran['jumlah_pengeluaran'];
			}
			?>
			<tr class="dark">
				<td colspan="3">Total Pengeluaran Bulan <?= $bulan ?></td>
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