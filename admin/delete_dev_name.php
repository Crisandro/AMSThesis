<?php
include('../DBconnection/dbconn.php');
dbcon();
if (isset($_POST['delete_dev_name'])){
	$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$target = $id[$i];
		$result = mysql_query("delete from device_name where dev_id='$target'")
		or die(mysql_error());
	}
	header("location: dev_name.php");
}
?>