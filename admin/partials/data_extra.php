<h1>Data Extrakulikuler</h1>
<hr>

<?php 
	$query_extra = $koneksi->query("SELECT * FROM tb_extra");
	if ($query_extra->num_rows > 0) {
		while($data_extra = $query_extra->fetch_assoc()){
			?>
			<div class="col-md-4 col-sm-12 extra">
				<i class=" fa <?= $data_extra['icon_extra'] ?>"></i>
				<h2><?= $data_extra['nama_extra'] ?></h2>
				<h4><?= $data_extra['pengajar_extra'] ?></h4>
				<a href="?menu=data_extra&action=edit&id_extra=<?= $data_extra['id_extra'] ?>" class="btn-primary">Edit</a>
				<a href="?menu=data_extra&action=delete&id_extra=<?= $data_extra['id_extra'] ?>" class="btn-danger">Hapus</a>
			</div>
			<?php
		}
	}
	else{
		?>
		<h4 align="center">Tidak Ada Data</h4>
		<?php
	}

 ?>
 <a href="?menu=data_extra&action=add">
	 <div class="col-md-4 extra plus">
		<i class=" fa fa-plus-circle"></i>
		<h2>Tambah Extra</h2>
	</div>
</a>
