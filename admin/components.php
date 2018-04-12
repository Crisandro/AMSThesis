<?php include('header.php'); ?>
<?php include('session.php'); 
	$name = $_GET['name'];
?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>

				<div class="span9" id="content">
                    <div class="row-fluid">
					 	
                        <br/>
                        <br/>
                        <br/><br/>

					 	<div id="sc" align="center"><image src="images/logo.png" width="45%" height="45%"/></div>

                        <?php
    			            $count_item=mysql_query("select * from stdevice where assigned_set = '$name'");
    			            $count = mysql_num_rows($count_item);
		                ?>
				   		<div id="block_bg" class="block">
	                        <div class="navbar navbar-inner block-header">
	                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> <?php echo $name ?>'s Components</div>
	                            	<div class="muted pull-right">
										<a id="return" data-placement="left" title="Click to Return" href="sets.php"><i class="icon-arrow-left"></i> Cancel</a>
									</div>
									<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
									</script>
	                          	<!-- <div class="muted pull-right">
									Number of All Components: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div> -->
							</div>

			                <h4 id="sc">name
								<div align="right" id="sc">Date:
									<?php
			                            $date = new DateTime();
			                            echo $date->format('l, F jS, Y');
			                         ?></div>
							</h4>


							</br>

						<div class="block-content collapse in">
						    <div class="span12">
							  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	                                <thead>
									        <tr>
												<th>Device Type</th>
												<th>Device Description </th>
												<th>Inventory Code</th>
										        <th>Device Brand  </th>
												<th>Device Model  </th>
												<th>Device Status  </th>
							                    <th>    Actions</th>
									    </tr>
									</thead>
									<tbody>
										<!--Content-->
										<?php
											while($row = mysql_fetch_array($count_item)){
											$id = $row['id'];
											$dev_id = $row['dev_id'];
										?>

		        					    <tr>
											<td>
												<?php
													$item=mysql_query("select * from device_name where dev_id = '$dev_id'");
													while($row1 = mysql_fetch_array($item)){
														echo $row1['dev_name'];
													}
												?>
											</td>
											<td><?php echo $row['dev_desc']; ?></td>
											<td><?php echo $row['dev_serial']; ?></td>
											<td><?php echo $row['dev_brand']; ?></td>
											<td><?php echo $row['dev_model']; ?></td>
											<td width="50px">
												<?php 
													echo '<div class="alert alert-success"><strong>'.$row['dev_status'].'</strong></div>'; 
												?>
											</td>

											<?php include('toolttip_edit_delete.php'); ?>
											<td class="empty" >
												<a rel="tooltip" title="Edit Device" id="e<?php echo $id; ?>" href="setedit.php<?php echo '?id='.$id.'&&dev_id='.$dev_id.'&&name='.$name; ?> " class="btn btn-success">
													<i class="icon-pencil"> Replace</i>
												</a>
	                                            <?php include('modal_delete.php'); ?>

											</td>
										</tr>

										<?php 		}
										?>


									</tbody>
								</table>

					</div>
				</div>

			</div>
		<?php include('footer.php'); ?>
		</div>
	<?php include('script.php'); ?>
	</body>
</html>