<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $stdev_id = $_GET['stdev_id']; ?>
<?php $get_id = $_GET['id']; ?>
<?php $type = $_GET['type']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
								
                          <div class="empty">
			 	             <div class="alert alert-success">
                              <strong>they will redirect move to the location you select</strong>
                            </div>
			               </div>
						   
						    <?php $location_query = mysql_query("select * from stlocation	                     
	                         where stdev_id = '$stdev_id'")or die(mysql_error());
	                         $location_row = mysql_fetch_array($location_query);
	                        ?>	
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">From:&nbsp;<?php echo $location_row['stdev_location_name']; ?>&nbsp;Transfer Device</div>
										<div class="muted pull-right">
										<a id="return" data-placement="left" title="Click to Return" href="mydevice.php<?php echo '?stdev_id='.$stdev_id; ?>"><i class="icon-arrow-left"></i> Back</a>
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
										<?php 
											if($type == 'single'){
												echo '<div class="control-group">';
												echo 	'<label class="control-label" for="inputEmail">Item Type/Set Name</label>';
												echo 	'<div class="controls">';
												echo 		'<select id="qtype" name="dev_id" readonly="readonly" required>';
												echo 			'<option value="'.$row['dev_id'].'" >'.$row['dev_name'].'</option>';
												echo		'</select>';
												echo	'</div>';
												echo '</div>';		
											}
											else if($type == 'set'){
												$s = mysql_query("select * from sets where id = '$get_id'")or die(mysql_error());
												$rows = mysql_fetch_array($s);				
												echo '<div class="control-group">';
												echo 	'<label class="control-label" for="inputEmail">Item Type/Set Name</label>';
												echo 	'<div class="controls">';
												echo 		'<select id="qtype" name="dev_id" readonly="readonly" required>';
												echo 			'<option value="'.$row['dev_id'].'" >'.$rows['Name'].'</option>';
												echo		'</select>';
												echo	'</div>';
												echo '</div>';	
											}?>
										<div class="control-group">
		                                  <label class="control-label" for="inputEmail">Move TO</label>
			                                <div class="controls">
					                            <select name="stdev_id" class="" required/>
					                            	<option></option>
				                                 	<?php $result =  mysql_query("select * from stlocation")or die(mysql_error());
				                                  	while ($row=mysql_fetch_array($result)){ 
				                                  	?>
					                                  	<option value="<?php echo $row['stdev_id']; ?>">
								                            <?php echo $row['stdev_location_name']; ?> 
								                        </option>
								                    <?php 		
				                                  	} ?>
					                            </select>
		                                	</div>
	                                    </div>


										<div class="control-group">
											<div class="controls">
												<button id="move" data-placement="right" title="Click to Move Device" name="transfer" type="submit" class="btn btn-warning"><i class="icon-move"></i> Move</button>
											</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#move').tooltip('show');
										$('#move').tooltip('hide');
										});
										</script>
									</form>

										<?php
										if (isset($_POST['transfer'])){
											$oras = strtotime("now");
											$ora = date("Y-m-d",$oras);
											$stdev_id = $_POST['stdev_id'];
											mysql_query("update location_details set
											            date_deployment = '$ora',
														stdev_id = '$stdev_id'
														where id = '$get_id' ")or die(mysql_error());

											mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','transfer Item  $dev_name to location id $stdev_id')")or die(mysql_error());
											?>
											<script>
												window.location = "mydevice.php<?php echo '?stdev_id='.$stdev_id; ?>";
												$.jGrowl("Item / Set Transfer Successfully", { header: 'Item Transfer' });
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
<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();

		jQuery("#qtype").change(function(){
			var x = jQuery(this).val();
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>			
		<?php include('footer.php'); ?>  
		 </div>
		<?php include('script.php'); ?>
    </body>
</html>