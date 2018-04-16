<?php 
include 'database.php';
$db = new database();
?>
<h3>Data User</h3>
 
<a href="input.php">Input Data</a>
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
			<a href="edit.php?id=<?php echo $user['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $user['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>