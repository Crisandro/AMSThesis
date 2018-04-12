<?php include('header.php'); ?>
<?php include('session.php'); ?>
<!--get device location details-->
<?php $get_id = $_GET['stdev_id']; ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 		<a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Click to return" ><i class="icon-arrow-left icon-large"></i> Back</a>
						  	<script type="text/javascript">
				              	$(document).ready(function(){
				              	$('#return').tooltip('show');
				              	$('#return').tooltip('hide');
				              	});
		             		</script>


					<?php
						$location_query = mysql_query("select * from stlocation where stdev_id = '$get_id'")
						or die(mysql_error());
	                    $location_row = mysql_fetch_array($location_query);
                    ?>

					<!--block -->
		            <div id="block_bg" class="block">
		                <div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>
								<div id="" class="muted pull-right">
									<?php
										$my_device = mysql_query("select * from location_details
			                            LEFT JOIN stdevice ON location_details.id = stdevice.id
										LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
										where NOT EXISTS
		                                (select * from location_details where dev_status='Available')
		                                and stdev_id = '$get_id' ")
										or die(mysql_error());
										$count_my_device = mysql_num_rows($my_device);?>
										Number of Device: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
								</div>
		                    </div>

							<!--for Print display visible-->
							<h4 id="sc">Location:<?php echo $location_row['stdev_location_name']; ?> all device List
								<div align="right" id="sc">Date:
									<?php
									$date = new DateTime();
									echo $date->format('l, F jS, Y');
									?>
								 </div>
							</h4>

 							</br>



							<div class="block-content collapse in">
								<div class="span13"	>

									<form action="" method="post"><!---table form-->
									  	
										<br/>
									  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
											<thead>
											     <tr>
														<th class="empty"></th>
														<th>Item's Name</th>
														<th>Description </th>
														<th>Inventory Code</th>
												        <th>Brand  </th>
														<th>Model  </th>
														<th>Date Assigned   </th>
														<th>Status </th>
														<th class="empty">Action</th>
											    </tr>
											</thead>
											<tbody>
												<!--table Content-->
												<?php
													$my_device = mysql_query("select * from location_details
													LEFT JOIN sets ON location_details.id = sets.id
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS
													(select * from location_details where dev_status='Available' or Status ='Available')
													and stdev_id = '$get_id' 
													order by date_deployment DESC")or die(mysql_error());
													while($row = mysql_fetch_array($my_device)){
														$id = $row['id'];
		                                                $dev_id = $row['dev_id'];
		                                                $type = $row['type'];
		                                                if($row['type'] == "single"){
															echo '<tr>';
															echo	'<td>';
			                                                echo        '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
															echo	'</td>';
															echo	'<td>'.$row['dev_name'].'</td>';
															echo	'<td>' .$row['dev_desc']. '</td>';
															echo	'<td>' .$row['dev_serial'].'</td>';
															echo	'<td>' .$row['dev_brand']. '</td>';
															echo	'<td>' .$row['dev_model']. '</td>';
															echo	'<td>' .$row['date_deployment']. '</td>';
															echo	'<td>';
			                                                echo        '<div class="alert alert-success"></i><strong>'.$row['dev_status'].'</strong></div>';
			                                                echo    '</td>';

															include('toolttip_edit_delete.php'); 
															echo	'<td width="100" class="empty">';
			                                                echo        '<center>';
			                                                echo            '<a rel="tooltip"  title="Transfer Device" id="e' .$id. '" href="transfer.php?id='.$id.'&& stdev_id='.$get_id.'&& type='.$type.'" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>';
			    											echo		    '<a rel="tooltip"  title="Return" id="t'.$id.'" href="devl_update_status.php?id='.$id.'&& stdev_id='.$get_id.' && dev_id='.$dev_id. ' && admin='.$admin_username.'&& type='.$type.'" class="btn btn-success"><i class="icon-upload-alt"></i> &nbsp;&nbsp;&nbsp;Return</a>';
			                                                echo        '</center>';
			                                                echo    '</td>';
															echo '</tr>';
													
														}
														else if($row['type']=="set"){
															
															echo '<tr>';
															echo	'<td>';
			                                                echo        '<i class="icon-ok"></i><div id="hide"><strong>'.$row['Status'].'</strong></div>';
															echo	'</td>';
															echo	'<td>'.$row['Name'].'</td>';
															$names = $row['Name'];
															echo	'<td><a href="compo.php?name='.$names.'&& stdev_id='.$get_id.'">Components</a></td>';
															echo	'<td>N/A</td>';
															echo	'<td>N/A</td>';
															echo	'<td>N/A</td>';
															echo	'<td>' .$row['date_deployment']. '</td>';
															echo	'<td>';
			                                                echo        '<div class="alert alert-success"></i><strong>'.$row['Status'].'</strong></div>';
			                                                echo    '</td>';
			                                                $forname = $row['Name'];
			                                                $forid = mysql_query("select * from sets where Name ='$forname'")or die(mysql_error());
			                                                $rowi = mysql_fetch_array($forid);
			                                                $finalid= $rowi['id'];
															include('toolttip_edit_delete.php'); 
															echo	'<td width="100" class="empty">';
			                                                echo        '<center>';
			                                                echo            '<a rel="tooltip"  title="Transfer Device" id="e' .$id. '" href="transfer.php?id='.$finalid.'&& stdev_id='.$get_id.'&& type='.$row['type'].'" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>';
			    											echo		    '<a rel="tooltip"  title="Return" id="t'.$id.'" href="devl_update_status.php?stdev_id='.$get_id.' && admin='.$admin_username.'&& type='.$type.'&& id='.$finalid.'" class="btn btn-success"><i class="icon-upload-alt"></i> &nbsp;&nbsp;&nbsp;Return</a>';
			                                                echo        '</center>';
			                                                echo    '</td>';
															echo '</tr>';
														}
													} ?>
											</tbody>
										</table>
									</form>
								<!-- /block -->
 								</div>
							</div>
						</div>
					</div>
  				</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>