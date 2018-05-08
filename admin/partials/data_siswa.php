<h1>Data Siswa</h1>
<hr>
<a href="?menu=data_siswa&action=add" class="btn-info"><i class=" fa fa-plus"></i>  Tambah Siswa</a>
<table class="siswa" cellpadding="15px">
	<tr>
		<th>No</th>
		<th>Nama Siswa</th>
		<th>Nis Siswa</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>No Telpon</th>
		<th>Action</th>
	</tr>
	<?php 
		$query_siswa = $koneksi->query("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");
		$no = 1;
		if ($query_siswa->num_rows > 0) {
			while ($data_siswa = $query_siswa->fetch_assoc()) {
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data_siswa['nama_siswa'] ?></td>
					<td><?= $data_siswa['nis_siswa'] ?></td>
					<td><?= $data_siswa['jenis_kelamin'] ?></td>
					<td><?= $data_siswa['agama_siswa'] ?></td>
					<td><?= $data_siswa['no_telp'] ?></td>
					<td><a href="?menu=data_siswa&action=edit&id_siswa=<?= $data_siswa['id_siswa'] ?>" class="btn-primary block">Edit</a> <a href="?menu=data_siswa&action=delete&id_siswa=<?= $data_siswa['id_siswa'] ?>" class="btn-danger block">Hapus</a></td>
				</tr>
				<?php
				$no++;
			}
		}
		else{
			?>
			<tr>
				<td colspan="7"><b>Tidak Ada Data</b></td>
			</tr>
			<?php
		}
		
	 ?>
</table>