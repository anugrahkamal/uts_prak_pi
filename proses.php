<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->tambah_data($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['email'],$_POST['password']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	header("location:tampil.php");
 }
?>