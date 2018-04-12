<?php
	function dbcon(){
		$user = "root";
		$pass = "";
		$host = "localhost";
		$db = "thesis";
		mysql_connect($host,$user,$pass);
		mysql_select_db($db);
	}
?>