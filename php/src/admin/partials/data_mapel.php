<h1>Data Mapel</h1>
<hr>

<a href="?menu=data_mapel&action=add" class="btn-info"><i class=" fa fa-plus"></i>  Tambah Mapel</a>
<table class="siswa" cellpadding="15px">
	<tr>
		<th>No</th>
		<th>Nama Mapel</th>
		<th>Action</th>
	</tr>
	<?php 
		$query_mapel = $koneksi->query("SELECT * FROM tb_mapel ORDER BY nama_mapel ASC");
		$no = 1;
		if ($query_mapel->num_rows > 0) {
			while ($data_mapel = $query_mapel->fetch_assoc()) {
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data_mapel['nama_mapel'] ?></td>
					<td><a href="?menu=data_mapel&action=edit&id_mapel=<?= $data_mapel['id_mapel'] ?>" class="btn-primary btn-primaryrsp">Edit</a> <a href="?menu=data_mapel&action=delete&id_mapel=<?= $data_mapel['id_mapel'] ?>" class="btn-danger btn-dangerrsp">Hapus</a></td>
				</tr>
				<?php
				$no++;
			}
		}
		else{
			?>
			<tr>
				<td colspan="3"><b>Tidak Ada Data</b></td>
			</tr>
			<?php
		}
		
	 ?>
</table>