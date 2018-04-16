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
}
?>