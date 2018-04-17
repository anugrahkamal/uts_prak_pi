<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="nav">
<ul><li><a href="index.php">Data User</a> | </li>
	<li><a href="buku.php">Data Buku</a> | </li>
	<li><a href="kategori.php">Data Kategori</a></li>
</ul>
</nav>

<?php	
include 'database.php';
$db=new database();
?>

<div class="isimain">
<h1>Edit Data</h1>
<form action="proses.php?aksi=edit_buku" method="post">
<?php
foreach ($db->edit_buku($_GET['id']) as $edit){
?>
<table>
	<tr>
		<td>Serial</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $edit['id']?>">
			<input type="text" name="serial" value="<?php echo $edit['serial']?>">
		</td>
	</tr>
	<tr>
		<td>Judul</td>
		<td><input type="text" name="title" value="<?php echo $edit['title']?>"></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td><input type="text" name="author" value="<?php echo $edit['author']?>"></td>
	</tr>
	<tr>
		<td>Sinopsis</td>
		<td><input type="text" name="synopsis" rows="10" cols="50" value="<?php echo $edit['synopsis']?>"></td>
	</tr>
	<tr>
		<td>ID Kategori</td>
		<td><select name="id_books_categories" value="<?php echo $edit['id_books_categories']?>">
			<option value="1">Jaringan</option>
			<option value="2">RPL</option>
			<option value="3">Database</option>
			<option value="4">Sistem Informasi</option></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="Simpan" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form></div>
</body></html>