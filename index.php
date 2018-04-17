<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php 
include 'database.php';
$db = new database();
?>

<nav class="nav">
<ul><li><a href="index.php">Data User</a> | </li>
	<li><a href="galeri.html">Data Buku</a> | </li>
	<li><a href="harga.html">Data Kategori</a></li>
</ul>
</nav>
<br><br>
<h1>Data User</h1>
<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style> 
<a href="input.php"><input type="submit" value="Tambah Data User"></a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $user){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $user['first_name']; ?></td>
		<td><?php echo $user['last_name']; ?></td>
		<td><?php echo $user['username']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td><?php echo $user['password']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $user['id']; ?>&aksi=edit">Edit</a> | 
			<a href="proses.php?id=<?php echo $user['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>