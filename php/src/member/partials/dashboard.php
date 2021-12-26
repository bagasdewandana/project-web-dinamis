<?php 
	require_once '../koneksi/koneksi.php';
	$id_user = $_SESSION['user_login']['id_user'];

	$query_user = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$data_user = $query_user->fetch_assoc();
 ?>

<h2>Pengaturan Account</h2>
<hr>
<br>

<table cellpadding="20px">
	<tr>
		<td><label>Username</label></td>
		<td>:</td>
		<td><?= $data_user['username'] ?></td>
		<td><a href="#">Edit</a></td>
	</tr>
	<tr>
		<td><label>Email</label></td>
		<td>:</td>
		<td><?= $data_user['email_user'] ?></td>
		<td><a href="#">Edit</a></td>
	</tr>
	<tr>
		<td><label>Status</label></td>
		<td>:</td>
		<td><?= $data_user['level_user'] ?></td>
	</tr>
	<tr>
		<td><label>Password</label></td>
		<td>:</td>
		<td><?= $data_user['password'] ?></td>
		<td><a href="#">Edit</a></td>
	</tr>
</table>
