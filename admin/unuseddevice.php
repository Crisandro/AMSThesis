<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">

				<?php include('dashboard_slidebar.php'); ?>
				  <div class="span9" id="content">
                     <div class="row-fluid">
                     	<div class="control-group">
	                     	<a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" >
						 		<i class="icon-plus-sign icon-large"></i>
						 		 Add New Item
						 	</a>
	                        <a href="createset.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Create a New Set" >
						 		<i class="icon-plus-sign icon-large"></i>
						 		 Create a New Set
						 	</a>
						  	<script type="text/javascript">
				              	$(document).ready(function(){
				              	$('#add').tooltip('show');
				              	$('#add').tooltip('hide');
				              	});
			            	</script>
			            </div>
                        <br />
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php
	             	$count_item=mysql_query("select * from stdevice where dev_status='Available'");
	             	$count = mysql_num_rows($count_item);
	             	$count_item1=mysql_query("select * from sets where Status='Available'");
    				$count1 = mysql_num_rows($count_item1);
    				$countni = $count - ($count1*4);
                 ?>
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Available Item List</div>
							 <div class="muted pull-right">
								Number of Available Item (s): <span class="badge badge-info"><?php  echo $countni; ?></span>
							 </div>
                          </div>
				<h4 id="sc">Unused Item (s) List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

<div class="block-content collapse in">
   <div class="span12">

<form id="send" method="post">
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Location Name</label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error());
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>

	  <div class="control-group">
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Assign">
            <i class="icon-share"> Assign Location</i>
        </button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>

	  </div>
 </div>
</div>
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>
		        <tr>
				<th class="empty"></th>
					<th>Item's Name</th>
					<th>Item's Description </th>
					<th>Item's Serial Number  </th>
			        <th>Item's Brand  </th>
					<th>Model  </th>
					<th>Status  </th>
		    </tr>
		</thead>
<tbody>
<!---Content-->

		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where  dev_status='Available' and assigned_set='' ORDER BY stdevice.id DESC")
        or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['dev_name'];
		?>

		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>
		</tr>

	<?php } ?>

</tbody>
</table>
</form>
<script>
  jQuery(document).ready(function(){
      jQuery("#send").submit(function(e){
      	e.preventDefault();{
        			var formData = jQuery(this).serialize();
        			$.ajax({
        			type: "POST",
        			url: "send.php",
        			data: formData,
        			success: function(html){

        			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
        			var delay = 500;
        			setTimeout(function(){ window.location = 'device_location.php'  }, delay);

        			}

        		 });

          }
      });
  });
</script>

</div>
</div>

</div>
</div>
</div>


<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>