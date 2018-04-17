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
	<li><a href="buku.php">Data Buku</a> | </li>
	<li><a href="kategori.php">Data Kategori</a></li>
</ul>
</nav>
<br><br>
<h1>Data Buku</h1>
<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style> 
<a href="input_kategori.php"><input type="submit" value="Tambah Data Kategori"></a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Deskripsi</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data_kategori() as $kategori){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $kategori['name']; ?></td>
		<td><?php echo $kategori['description']; ?></td>
		<td>
			<a href="edit_kategori.php?id=<?php echo $kategori['id']; ?>&aksi=edit_kategori">Edit</a> |
			<a href="proses.php?id=<?php echo $kategori['id']; ?>&aksi=hapus_kategori">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>