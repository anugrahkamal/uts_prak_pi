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
<h1>Tambah Data Buku</h1>
<form action="proses.php?aksi=tambah_buku" method="post">
<table>
	<tr>
		<td>Seri</td>
		<td><input type="text" name="serial"></td>
	</tr>
	<tr>
		<td>Judul</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td><input type="text" name="author"></td>
	</tr>
	<tr>
		<td>Sinopsis</td>
		<td><textarea name="synopsis" rows="10" cols="50"></textarea></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td><select name="id_books_categories">
			<option value="1">Jaringan</option>
			<option value="2">RPL</option>
			<option value="3">Database</option>
			<option value="4">Sistem Informasi</option></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form></div>
</body></html>