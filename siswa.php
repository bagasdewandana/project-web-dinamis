<?php 
	require_once 'koneksi/koneksi.php';
	if (!isset($_SESSION['user_login'])) {
		header("location: ../login.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Siswa</title>
 	<link rel="stylesheet" type="text/css" href="css/siswa.css">
 	<link rel="stylesheet" type="text/css" href="css/navbar.css">
 <body>
 <div class="wrapper">
 	
 	<div class="grid">
 		<div class="bg-table row">
 			<div class="col-lg-12">
 				<h1>Data Siswa</h1>
 				<table class="tb-siswa" >
	 				<tr>
	 					<th>No</th>
	 					<th>Nama</th>
	 					<th>Nis</th>
	 					<th>Jenis Kelamin</th>
	 					<th>Agama</th>
	 					<th>No Telepon</th>
	 				</tr>
	 				<?php 
	 					$query_siswa =  $koneksi->query("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");
	 					$nomor = 1;
	 					if ($query_siswa->num_rows > 0) {
	 						while ($data_siswa = $query_siswa->fetch_assoc()) {
	 							?>
	 								<tr>
	 									<td><?= $nomor ?></td>
	 									<td><?= $data_siswa['nama_siswa'] ?></td>
	 									<td><?= $data_siswa['nis_siswa'] ?></td>
	 									<td><?= $data_siswa['jenis_kelamin'] ?></td>
	 									<td><?= $data_siswa['agama_siswa'] ?></td>
	 									<td><?= $data_siswa['no_telp'] ?></td>
	 								</tr>
	 							<?php
	 						$nomor++;
	 						}
	 					}
	 				 ?>
	 			</table>
 			</div>
 		</div><!--bg-table-->
 	</div><!--grid-->
 </div><!--wrapper-->
 </body>
 <script type="text/javascript">
  $(document).ready(function(){
    $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
    $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
    $menu_line.css({'background-color': 'black'});
    $bg_menu_li.css({'color':'black'});
  });
  $(window).scroll(function(){
    $bg_menu = $('.bg-menu');
    $wScroll = $(window).scrollTop();
    $menu_height = $bg_menu.outerHeight();
    $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
    $top_logo = $('.top-logo');
    $garis = $('.garis');
    $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
    if ($wScroll>$menu_height) {
      $bg_menu_li.css({'color':'white'});
      $garis.css({'background': 'white'});
      $menu_line.css({'background-color': 'white'});
      $bg_menu.css({'background':'#E2B512'});
      $top_logo.css({'background-image':"url(img/3.png)"});
    }
    else{
      $bg_menu_li.css({'color':'#000'});
      $garis.css({'background': '#000'});
      $menu_line.css({'background-color': 'black'});
      $bg_menu.css({'background':'transparent'});
      $top_logo.css({'background-image':"url(img/31.png)"});
    }
  });
</script>
 </html>
