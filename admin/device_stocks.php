<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>

				<div class="span9" id="content">
                    <div class="row-fluid">
					 	<br />
                        <div class="empty">
                              <div class="alert alert-success alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete. You can only check unused items.
                              </div>
                         </div>

					 	<div id="sc" align="center"><image src="images/logo.png" width="45%" height="45%"/></div>

                        <?php
    			            $count_item=mysql_query("select * from stdevice
    						LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
    			            $count = mysql_num_rows($count_item);
		                ?>
				   		<div id="block_bg" class="block">
	                        <div class="navbar navbar-inner block-header">
	                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Device Stock (s) List</div>
	                          	<div class="muted pull-right">
									Number of All Device: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
							</div>

			                <h4 id="sc">Device Stock List
								<div align="right" id="sc">Date:
									<?php
			                            $date = new DateTime();
			                            echo $date->format('l, F jS, Y');
			                         ?></div>
							</h4>


							</br>

						<div class="block-content collapse in">
						    <div class="span12">
							<form action="device_delete.php" method="post">
									<div class="pull-right">
									   <a href="print_all_stock.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
									   <script type="text/javascript">
									     $(document).ready(function(){
									     $('#print').tooltip('show');
									     $('#print').tooltip('hide');
									     });
									   </script>        	   
							         </div>
							  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	                                <a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#device_delete_final" id="delete"  class="btn btn-danger" name=""><i class="fa fa-exclamation-triangle"> Mark as Deadpool</i></a>
										<script type="text/javascript">
										 $(document).ready(function(){
											 $('#delete').tooltip('show');
											 $('#delete').tooltip('hide');
										 });
										</script>
										<?php include('modal_delete.php'); ?>
	                                <thead>
									        <tr>
												<th class="empty"></th>
												<th>Item Type</th>
												<th>Item's Description </th>
												<th>Inventory Code</th>
										        <th>Item's Brand  </th>
												<th>Model  </th>
												<th>Status  </th>
							                    <th>    Actions</th>
									    </tr>
									</thead>
									<tbody>
										<!--Content-->
										<?php
											$device_query = mysql_query("select * from stdevice
	                                        LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id ")
	                                        or die(mysql_error());
											while($row = mysql_fetch_array($device_query)){
											$id = $row['id'];
											$dev_id = $row['dev_id'];
										?>

		        					    <tr>
	                                        <td width="30">
	                                        	<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php echo $row['dev_name']; ?></td>
											<td><?php echo $row['dev_desc']; ?></td>
											<td><?php echo $row['dev_serial']; ?></td>
											<td><?php echo $row['dev_brand']; ?></td>
											<td><?php echo $row['dev_model']; ?></td>
											<td width="50px">
												<?php
											        if($row['dev_status']=='Available')
	    									        {
	    										    echo '<div class="alert alert-success"><strong>'.$row['dev_status'].'</strong></div>';
	    									        }
	    									        else if($row['dev_status']=='Used')
	    										    {
	    										    echo '<div class="alert alert-warning"><strong>'.$row['dev_status'].'</strong></div>';

	    									        };

											    ?>
											</td>

											<?php include('toolttip_edit_delete.php'); ?>
											<td class="empty" >
												<a rel="tooltip" title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success">
													<i class="icon-pencil"> Edit</i>
												</a>
	                                            <?php include('modal_delete.php'); ?>

											</td>
										</tr>

										<?php 		}
										?>


									</tbody>
								</table>
							</form>

					</div>
				</div>

			</div>
		<?php include('footer.php'); ?>
		</div>
	<?php include('script.php'); ?>
	</body>
</html>