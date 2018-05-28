<h1>Dashboard</h1>
<hr>

<?php 
	$query_check = $koneksi->query("SELECT * FROM tb_siswa");
	$jml_siswa = $query_check->num_rows;

	$query_uangkas = $koneksi->query("SELECT * FROM tb_uangkas");
	$uangkas = 539000;
	while ($data_uangkas = $query_uangkas->fetch_assoc()) {
		$uangkas+=$data_uangkas['jumlah'];
	}
 ?>
<div class="row">
	<div class="col-md-5 jml_siswa">
		<div class="col-md-5 card-left">
			<i class="fa fa-user"></i>
		</div>
		<div class="col-md-7 card-right">
			<h1><?= $jml_siswa ?></h1>
			<p>Siswa</p>
		</div>
	</div>

	<div class="col-md-2"></div>

	<div class="col-md-5 jml_siswa">
		<div class="col-md-5 card-left">
			<i class="fa fa-money"></i>
		</div>
		<div class="col-md-7 card-right">
			<h1 class="uangkas">Rp. <?= $uangkas ?></h1>
			<p>Total Uangkas</p>
		</div>
	</div>
</div>