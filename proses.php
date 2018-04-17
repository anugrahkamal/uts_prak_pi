<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->tambah_data($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['email'],$_POST['password']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "edit"){
 	$db->update($_POST['id'],$_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['email'],$_POST['password']);
 	header("location:index.php");
 }
?>