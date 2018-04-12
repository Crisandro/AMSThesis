<?php
	include('../DBconnection/dbconn.php');
	dbcon();
	$admin = $_GET['admin'];
	$type = $_GET['type'];
	$stdev_id = $_GET['stdev_id'];
	$get_id = $_GET['id'];
	
	if($type == 'single'){
		$query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")
		or die(mysql_error());
		$row = mysql_fetch_array($query);
		$dev_id = $_GET['dev_id'];
		$dev_name = $row['dev_name'];


		mysql_query("update stdevice set
		            dev_id = '$dev_id',
					dev_status = 'Available'
					where id = '$get_id' ")
		or die(mysql_error());

		mysql_query("delete from location_details where id = '$get_id'")
		or die(mysql_error());

		mysql_query("insert into activity_log (date,username,action) values (NOW(),'$admin','$dev_name Returned to the admin ')")
		or die(mysql_error());
	}
	else if($type == 'set'){

		mysql_query("update sets set 
					Status = 'Available'
					where id = '$get_id' ")
		or die(mysql_error());

		$querynasad = mysql_query("select * from sets where id = '$get_id'") 
		or die(mysql_error());
		$row2 = mysql_fetch_array($querynasad);
		$pinakataasngavalue = $row2['Name'];

		mysql_query("update stdevice set
					dev_status = 'Available'
					where assigned_set = '$pinakataasngavalue'")
		or die(mysql_error());

		mysql_query("delete from location_details where id = '$get_id'")
		or die(mysql_error());

		mysql_query("insert into activity_log (date,username,action) values (NOW(),'$admin','$pinakataasngavalue Returned to the admin ')")
		or die(mysql_error());	
	}
?>
<script>
window.location = "mydevice.php<?php echo '?stdev_id='.$stdev_id; ?>";
$.jGrowl("Item Status Successfully Returned", { header: 'Item Status Update' });
</script>