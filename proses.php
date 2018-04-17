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
 }elseif ($aksi == "tambah_buku") {
 	$db->tambah_data_buku($_POST['serial'],$_POST['title'],$_POST['author'],$_POST['synopsis'],$_POST['id_books_categories']);
 	header("location:buku.php");
 }elseif ($aksi == "hapus_buku") {
 	$db->hapus_buku($_GET['id']);
	header("location:buku.php");
 }elseif ($aksi == "edit_buku") {
 	$db->update_buku($_POST['id'],$_POST['serial'],$_POST['title'],$_POST['author'],$_POST['synopsis'],$_POST['id_books_categories']);
 	header("location:buku.php");
 }
?>