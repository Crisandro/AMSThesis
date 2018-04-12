<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
				  <div class="span9" id="content">
                     <div class="row-fluid">
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
                        <br /><br />
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php
		             $count_item=mysql_query("select * from sets where status='Available'");
		             $count = mysql_num_rows($count_item);
                 ?>
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Available Set List</div>
							 <div class="muted pull-right">
								Number of Available Sets (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                        </div>
				<h4 id="sc">Available Set (s) List
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
					<th>Set's Name</th>
					<th>Status  </th>
			        <th>View Components  </th>
			        <th>Action</th>
		    </tr>
		</thead>
<tbody>
<!---Content-->

		<?php
	    $device_query = mysql_query("select * from sets
		where  status='Available' ORDER BY id DESC")
        or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['Name'];
		?>

		<tr>
			<td width="30" class="empty">
				<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
			</td>
			<td><?php 
				$name = $row['Name'];
				echo $name; ?></td>
			<td>
				<div class="alert alert-success">
					<i class="icon-check"></i><strong><?php echo $row['Status']; ?></strong>
				</div>
			</td>
			<td class="empty" >
				<center>
					<a rel="tooltip" title="View Components" id="e<?php echo $id; ?>" href="components.php<?php echo '?name='.$name; ?>" class="btn btn-success">
						<i class="icon-list-alt"> View Components</i>
					</a>
				</center>
			</td>
			<td>
				<center>
					<a rel="tooltip" title="Destroy" id="e<?php echo $id; ?>" href="destroy.php<?php echo '?name='.$name.'&& id='.$id; ?>" class="btn btn-danger">
						<i class="icon-remove-circle"> Destroy</i>
					</a>
				</center>
			</td>
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
        			url: "sendset.php",
        			data: formData,
        			success: function(html){

        			$.jGrowl("Set Successfully Assigned", { header: 'Set Assign' });
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