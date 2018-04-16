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
}
?>