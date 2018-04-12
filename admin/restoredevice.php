<?php
include ('../DBconnection/dbconn.php');
dbcon();
$query = mysql_query("select * from recyclebin
LEFT JOIN device_name ON recyclebin.dev_id=device_name.dev_id")
or die(mysql_error());
$admin = $_GET['admin'];
$row = mysql_fetch_array($query);
$get_id = $_GET['id'];
$dev_id = $_GET['dev_id'];
$dev_name = $row['dev_name'];

	$query =  "select * from recyclebin where id='$get_id'" ;
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$d_id = $row['dev_id'];
	$d_desc = $row['dev_desc'];
	$d_serial = $row['dev_serial'];
	$d_brand = $row['dev_brand'];
	$d_model = $row['dev_model'];
	$d_status = $row['dev_status'];

	mysql_query("insert into stdevice values ('null','$d_id','$d_desc','$d_serial','$d_brand','$d_model','$d_status')")
	or die(mysql_error());

/*mysql_query("update stdevice set
            dev_id = '$dev_id',
			dev_status = 'Unused'
			where id = '$get_id' ")
or die(mysql_error());*/
mysql_query("delete from recyclebin where id = '$get_id'")
or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin','$dev_name Restored to the admin ')")
or die(mysql_error());

?>
<script>
window.location = "recyclebin.php";
$.jGrowl("Device Successfully Restored", { header: 'Device Restored' });
</script>