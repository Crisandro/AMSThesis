<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $get_dev_id = $_GET['dev_id']; ?>
<?php $name = $_GET['name']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
		
					<div class="span9" id="content">
		                <div class="row-fluid">
					   		
	                        <!-- block -->
	                        <div id="" class="block">
	                            <div class="navbar navbar-inner block-header">
	                                <div class="muted pull-left">Transfer Device</div>
									<div class="muted pull-right">
										<a id="return" data-placement="left" title="Click to Return" href="components.php<?php echo '?name='.$name; ?>"><i class="icon-arrow-left"></i> Cancel</a>
									</div>
									<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
									</script>  
	                            </div>
																	 
	                            <div class="block-content collapse in">    

									<?php
										$query = mysql_query("select * from stdevice
										LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
										where id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
									?>

									<form class="form-horizontal" method="post">

									    <div class="control-group">
									   		<label class="control-label" for="inputEmail"><h3>Replace</h3></label>
									   	</div>
								   		<table border="1px">									   		
								   			<th width="200px">Device Type</th>
								   			<th width="200px">Device's Description</th>
								   			<th width="200px">Inventory Code</th>
								   			<th width="200px">Brand</th>
								   			<th width="200px">Model</th>
								   			<th width="200px">Status</th>
								   			<tbody>
								   				<td><center><?php echo $row['dev_name']?></center></td>
								   				<td><center><?php echo $row['dev_desc']?></center></td>
								   				<td><center><?php echo $row['dev_serial']?></center></td>
								   				<td><center><?php echo $row['dev_brand']?></center></td>
								   				<td><center><?php echo $row['dev_model']?></center></td>
								   				<td><center><?php echo $row['dev_status']?></center></td>
								   			</tbody>
								   		</table>
										<br/>
										<div class="control-group">
		                                  	<label class="control-label" for="inputEmail"><H3>with :</h3></label>
		                                </div>
		                                <center>	                                	
				                            <select name="serial" class="" required/>
				                                <?php 
					                                $result =  mysql_query("select * from stdevice where dev_id='$get_dev_id' && assigned_set='' && dev_status='Available'")
					                                or die(mysql_error());
					                                $count = mysql_num_rows($result);
					                                if($count>0){
					                                	while ($row=mysql_fetch_array($result)){
								                            echo '<option>'.$row['dev_serial'].'</option>';
						                         		}
						                         	}	 
						                        	else{
					                                	echo '<option>No more Items...</option>';
				                                	}
				                                ?>
				                           </select>
		                                
		                                <br/>
		                                <br/>
		                                <br/>
	                                	
										<div class="control-group">
												<button id="move" data-placement="right" title="Click to Replace Device" name="replace" type="submit" class="btn btn-warning"><i class="icon-refresh"></i> Replace</button>
										</div>


										</center>
										<script type="text/javascript">
											$(document).ready(function(){
											$('#move').tooltip('show');
											$('#move').tooltip('hide');
											});
										</script>
									</form>

									<?php
										if (isset($_POST['replace'])){
											$oras = strtotime("now");
											$ora = date("Y-m-d",$oras);
											$serial = $_POST['serial'];
											mysql_query("update stdevice set assigned_set='$name' where dev_serial = '$serial'")or die(mysql_error());
											mysql_query("update stdevice set assigned_set='' where id = '$get_id'")or die(mysql_error());
										

											mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Replacement of item from $name')")or die(mysql_error());
											?>
											<script>
												window.location = "components.php<?php echo '?name='.$name; ?>";
												$.jGrowl("Device Replaced Successfully", { header: 'Device Replacement' });
											</script>
											<?php
										}
									?>
	                            </div>
	                        </div>
	                        <!-- /block -->
		                </div>
		            </div>
	            </div>		
				<?php include('footer.php'); ?>  
			</div>
			<?php include('script.php'); ?>
    </body>
</html>