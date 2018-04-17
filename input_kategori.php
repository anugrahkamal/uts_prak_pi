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


<div class="isimain">
<h1>Tambah Data Kategori Buku</h1>
<form action="proses.php?aksi=tambah_kategori" method="post">
<table>
	<tr>
		<td>Nama Kategori</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><input type="text" name="description"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form></div>
</body></html>