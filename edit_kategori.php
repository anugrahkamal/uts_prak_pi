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
<h1>Edit Data Kategori Buku</h1>
<form action="proses.php?aksi=edit_kategori" method="post">
<?php
foreach ($db->edit_kategori($_GET['id']) as $edit){
?>
<table>
	<tr>
		<td>Nama Kategori</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $edit['id']?>">
			<input type="text" name="name" value="<?php echo $edit['name']?>">
		</td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><input type="text" name="description" value="<?php echo $edit['description']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="Simpan" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form></div>
</body></html>