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
<a href="input_buku.php"><input type="submit" value="Tambah Data Buku"></a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Seri</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Sinopsis</th>
		<th>ID Kategori</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data_buku() as $buku){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $buku['serial']; ?></td>
		<td><?php echo $buku['title']; ?></td>
		<td><?php echo $buku['author']; ?></td>
		<td><?php echo $buku['synopsis']; ?></td>
		<td><?php echo $buku['id_books_categories']; ?></td>
		<td>
			<a href="edit_buku.php?id=<?php echo $buku['id']; ?>&aksi=edit_buku">Edit</a> |
			<a href="proses.php?id=<?php echo $buku['id']; ?>&aksi=hapus_buku">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>