<?php
include('../DBconnection/dbconn.php');
dbcon();
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM admin where admin_id='$id[$i]'");
}
header("location: device_stocks.php");
}
?>