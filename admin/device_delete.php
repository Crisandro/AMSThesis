<?php
include('../DBconnection/dbconn.php');
dbcon();
if (isset($_POST['device_delete'])){

	$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
	   	$query =  "select * from stdevice where id='$id[$i]'" ;
	   	$result = mysql_query($query) or die(mysql_error());
	   	$row = mysql_fetch_array($result);
   		$d_id = $row['dev_id'];
   		$d_desc = $row['dev_desc'];
   		$d_serial = $row['dev_serial'];
   		$d_brand = $row['dev_brand'];
   		$d_model = $row['dev_model'];
   		$d_status = 'Deadpool';

   		mysql_query("insert into recyclebin values ('null','$d_id','$d_desc','$d_serial','$d_brand','$d_model','$d_status')")
   		or die(mysql_error());
   		mysql_query("DELETE FROM stdevice where id='$id[$i]'")
		or die(mysql_error());
		mysql_query("delete from location_details where id= '$id[$i]'")
		or die(mysql_error());
		header("location: device_stocks.php");
	}
	
}
if (isset($_POST['device_delete2'])){

	$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
	   	$query =  "select * from recyclebin where id='$id[$i]'" ;
	   	$result = mysql_query($query) or die(mysql_error());
	   	$row = mysql_fetch_array($result);
   		$d_id = $row['dev_id'];
   		$d_serial = $row['dev_serial'];

   		mysql_query("DELETE FROM recyclebin where id='$id[$i]'")
   		or die(mysql_error());
		mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Permanently deleted device $d_serial')")
        or die(mysql_error());
		header("location: recyclebin.php");
	}
	
}
?>