<?php
class database{
	var $host="localhost";
	var $user="root";
	var $pass="";
	var $db="uts_db";

	function __construct(){
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){
		$data=mysql_query("SELECT * FROM users");
		while ($u=mysql_fetch_array($data)) {
			$hasil[]=$u;
		}
		return $hasil;
	}

	function tambah_data($first_name, $last_name, $username, $email, $password){
		mysql_query("INSERT INTO users VALUES('','$first_name','$last_name','$username','$email','$password')");
	}

	function hapus($id){
		mysql_query("DELETE FROM users WHERE id='$id'");
	}

	function edit($id){
		$data=mysql_query("SELECT * FROM users WHERE id='$id'");
		while ($edit=mysql_fetch_array($data)) {
			$hasil[]=$edit;
		}
		return $hasil;
	}

	function update($id, $first_name, $last_name, $username, $email, $password){
		mysql_query("UPDATE users SET first_name='$first_name', last_name='$last_name', username='$username', email='$email', password='$password' WHERE id='$id'");
	}

	function tampil_data_buku(){
		$data=mysql_query("SELECT * FROM books");
		while ($u=mysql_fetch_array($data)) {
			$hasil[]=$u;
		}
		return $hasil;
	}

	function tambah_data_buku($serial, $title, $author, $synopsis, $id_books_categories){
		mysql_query("INSERT INTO books VALUES('','$serial','$title','$author','$synopsis','$id_books_categories')");
	}

	function hapus_buku($id){
		mysql_query("DELETE FROM books WHERE id='$id'");
	}

	function edit_buku($id){
		$data=mysql_query("SELECT * FROM books WHERE id='$id'");
		while ($edit=mysql_fetch_array($data)) {
			$hasil[]=$edit;
		}
		return $hasil;
	}

	function update_buku($id, $serial, $title, $author, $synopsis, $id_books_categories){
		mysql_query("UPDATE books SET serial='$serial', title='$title', author='$author', synopsis='$synopsis', id_books_categories='$id_books_categories' WHERE id='$id'");
	}

	function tampil_data_kategori(){
		$data=mysql_query("SELECT * FROM categories");
		while ($u=mysql_fetch_array($data)) {
			$hasil[]=$u;
		}
		return $hasil;
	}

	function tambah_data_kategori($name, $description){
		mysql_query("INSERT INTO categories VALUES('','$name','$description')");
	}

	function hapus_kategori($id){
		mysql_query("DELETE FROM categories WHERE id='$id'");
	}

	function edit_kategori($id){
		$data=mysql_query("SELECT * FROM categories WHERE id='$id'");
		while ($edit=mysql_fetch_array($data)) {
			$hasil[]=$edit;
		}
		return $hasil;
	}

	function update_kategori($id, $name, $description){
		mysql_query("UPDATE categories SET name='$name', description='$description' WHERE id='$id'");
	}
}
?>