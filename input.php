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
<h1>Tambah Data User</h1>
<form action="proses.php?aksi=tambah" method="post">
<table>
	<tr>
		<td>Nama Depan</td>
		<td><input type="text" name="first_name"></td>
	</tr>
	<tr>
		<td>Nama Belakang</td>
		<td><input type="text" name="last_name"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form></div>
</body></html>