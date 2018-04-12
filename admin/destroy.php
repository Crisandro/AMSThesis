<?php include('header.php'); ?>
<?php include('session.php'); 
	$name = $_GET['name'];
	$id = $_GET['id'];

	mysql_query("update stdevice set assigned_set = '' where assigned_set = '$name'")
	or die(mysql_error());
	mysql_query("delete from sets where id = '$id'")
	or die(mysql_error());

	header("location: sets.php");
?>