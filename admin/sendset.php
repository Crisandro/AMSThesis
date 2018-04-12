<?php
 	include('../DBconnection/dbconn.php');
    dbcon();
	include('session.php');
	$id=$_POST['selector'];
 	$stdev_id  = $_POST['stdev_id'];

	if ($id == '' ){
		header("location: device_location.php");
		?>

		<?php
	}
	else{
		$query = mysql_query("select * from location_details order by Id_id DESC")
		or die(mysql_error());
		$row = mysql_fetch_array($query);
		$ld_id  = $row['ld_id'];

	    $N = count($id);
	    for($i=0; $i < $N; $i++)
	    {
			$oras = strtotime("now");
			$ora = date("Y-m-d",$oras);
            mysql_query("update sets set Status = 'Used' where id = '$id[$i]' ")
            or die(mysql_error());

            $query1 = mysql_query("select * from sets where id = '$id[$i]'")
			or die(mysql_error());
			$row1 = mysql_fetch_array($query1);
			$setname = $row1['Name'];
            mysql_query("update stdevice set dev_status = 'Used' where assigned_set = '$setname'")
            or die(mysql_error());

		    mysql_query("insert location_details (id,stdev_id,date_deployment,type) values('$id[$i]','$stdev_id','$ora','set')")
		    or die(mysql_error());

			mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Assign Set id $id[$i] to location id $stdev_id')")
			or die(mysql_error());
	    }                         
    }
?>