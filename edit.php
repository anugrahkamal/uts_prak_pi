<?php	
include 'database.php';
$db=new database();
?>

<h3>Edit Data</h3>

<form action="proses.php?aksi=edit" method="post">
<?php
foreach ($db->edit($_GET['id']) as $edit){
?>
<table>
	<tr>
		<td>Nama Depan</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $edit['id']?>">
			<input type="text" name="first_name" value="<?php echo $edit['first_name']?>">
		</td>
	</tr>
	<tr>
		<td>Nama Belakang</td>
		<td><input type="text" name="last_name" value="<?php echo $edit['last_name']?>"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" value="<?php echo $edit['username']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $edit['email']?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $edit['password']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="Simpan" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>