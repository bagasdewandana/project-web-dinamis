<?php 
	require_once '../koneksi/koneksi.php';

 ?>

<h1>Data Uang Kas</h1>
<hr>
<a href="?menu=data_uangkas&action=add" class="btn-info"><i class=" fa fa-plus"></i>  Tambah Uang Kas</a>
<h3>Data Pemasukan</h2>
<table class="siswa" cellpadding="15px">
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
			$total_uangkas = 539000;
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
<table class="siswa" cellpadding="15px">
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
<table class="siswa" border="1" cellpadding="15px" style="border-color: #666">
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

<canvas id="myChart"></canvas>
<script>
'use strict';

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

(function(global) {
	var Months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	];

	var COLORS = [
		'#4dc9f6',
		'#f67019',
		'#f53794',
		'#537bc4',
		'#acc236',
		'#166a8f',
		'#00a950',
		'#58595b',
		'#8549ba'
	];

	var Samples = global.Samples || (global.Samples = {});
	var Color = global.Color;

	Samples.utils = {
		// Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
		srand: function(seed) {
			this._seed = seed;
		},

		rand: function(min, max) {
			var seed = this._seed;
			min = min === undefined ? 0 : min;
			max = max === undefined ? 1 : max;
			this._seed = (seed * 9301 + 49297) % 233280;
			return min + (this._seed / 233280) * (max - min);
		},

		numbers: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 1;
			var from = cfg.from || [];
			var count = cfg.count || 8;
			var decimals = cfg.decimals || 8;
			var continuity = cfg.continuity || 1;
			var dfactor = Math.pow(10, decimals) || 0;
			var data = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = (from[i] || 0) + this.rand(min, max);
				if (this.rand() <= continuity) {
					data.push(Math.round(dfactor * value) / dfactor);
				} else {
					data.push(null);
				}
			}

			return data;
		},

		labels: function(config) {
			var cfg = config || {};
			var min = cfg.min || 0;
			var max = cfg.max || 100;
			var count = cfg.count || 8;
			var step = (max - min) / count;
			var decimals = cfg.decimals || 8;
			var dfactor = Math.pow(10, decimals) || 0;
			var prefix = cfg.prefix || '';
			var values = [];
			var i;

			for (i = min; i < max; i += step) {
				values.push(prefix + Math.round(dfactor * i) / dfactor);
			}

			return values;
		},

		months: function(config) {
			var cfg = config || {};
			var count = cfg.count || 12;
			var section = cfg.section;
			var values = [];
			var i, value;

			for (i = 0; i < count; ++i) {
				value = Months[Math.ceil(i) % 12];
				values.push(value.substring(0, section));
			}

			return values;
		},

		color: function(index) {
			return COLORS[index % COLORS.length];
		},

		transparentize: function(color, opacity) {
			var alpha = opacity === undefined ? 0.5 : 1 - opacity;
			return Color(color).alpha(alpha).rgbString();
		}
	};

	// DEPRECATED
	window.randomScalingFactor = function() {
		return Math.round(Samples.utils.rand(-100, 100));
	};

	// INITIALIZATION

	Samples.utils.srand(Date.now());

	// Google Analytics
	/* eslint-disable */
	if (document.location.hostname.match(/^(www\.)?chartjs\.org$/)) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-28909194-3', 'auto');
		ga('send', 'pageview');
	}
	/* eslint-enable */

}(this));	
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
			labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
			datasets: [{
				/* data uang kas yang didapat */
				label: 'Pemasukan',
				fill: false,
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				data: [
					<?php
						$bulan = 1;
						while($bulan <= 12){
							$query_total_kas = $koneksi->query("SELECT SUM(jumlah) as total FROM tb_uangkas WHERE id_bulan=$bulan");
							$data_total_kas = $query_total_kas->fetch_assoc();
							if(is_numeric($data_total_kas['total'])){
								echo $data_total_kas['total'];
							}
							else{
								echo "0";
							}
							if($bulan < 12){
								echo ",";
							}
							$bulan++;
						}
					?>
				],
			}, {
				/* pengeluaran */
				label: 'Data Pengeluaran',
				backgroundColor: window.chartColors.red,
				borderColor: window.chartColors.red,
				data: [
					<?php
						$bulan = 1;
						while($bulan <= 12){
							$query_total_pengeluaran = $koneksi->query("SELECT SUM(jumlah_pengeluaran) as total FROM tb_pengeluaran WHERE id_bulan=$bulan");
							$data_total_pengeluaran = $query_total_pengeluaran->fetch_assoc();
							if(is_numeric($data_total_pengeluaran['total'])){
								echo $data_total_pengeluaran['total'];
							}
							else{
								echo "0";
							}
							if($bulan < 12){
								echo ",";
							}
							$bulan++;
						}
					?>
				],
				fill: true,
			}, {
				/* expect */
				label: 'Yang Seharusnya Didapat',
				fill: false,
				backgroundColor: window.chartColors.green,
				borderColor: window.chartColors.green,
				borderDash: [5, 5],
				data: [
					<?php 
						for($i = 1; $i <= 12; $i++){
							echo "300000, ";
						}
					 ?>
				],
			}]
		}, 

    options: {
				responsive: true,
				title: {
					display: true,
					text: 'Data Uangkas REPALTI'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
});
</script>