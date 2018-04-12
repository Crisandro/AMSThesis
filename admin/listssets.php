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
                        <div class="empty">
                              <div class="alert alert-success alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete. You can only check unused items.
                              </div>
                         </div>

					 	<div id="sc" align="center"><image src="images/logo.png" width="45%" height="45%"/></div>

                        <?php
    			            $count_item=mysql_query("select * from sets");
    			            $count = mysql_num_rows($count_item);
		                ?>
				   		<div id="block_bg" class="block">
	                        <div class="navbar navbar-inner block-header">
	                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Set(s) List</div>
	                          	<div class="muted pull-right">
									Number of All Sets: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
							</div>

			                <h4 id="sc">Set List
								<div align="right" id="sc">Date:
									<?php
			                            $date = new DateTime();
			                            echo $date->format('l, F jS, Y');
			                         ?></div>
							</h4>


							</br>

						<div class="block-content collapse in">
						    <div class="span12">
							
								<div class="pull-right">
								   <a href="print_all_stock.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
								   <script type="text/javascript">
								     $(document).ready(function(){
								     $('#print').tooltip('show');
								     $(	'#print').tooltip('hide');
								     });
								   </script>        	   
						         </div>
						  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                <thead>
								    <tr>
										<th>Set Name</th>
										<th>Number of Components </th>
										<th>Status  </th>
								        <th>View Components  </th>
								    </tr>
								</thead>
								<tbody>
									<!--Content-->
									<?php
									    $device_query = mysql_query("select * from sets
										where  status='Unused' ORDER BY id DESC")
								        or die(mysql_error());
									    while ($row = mysql_fetch_array($device_query)) {
										$id = $row['id'];
										$dev_name = $row['name'];
									?>

	        					    <tr>
                                        <td><?php echo $row['name']; ?></td>
										<td><?php echo $row['noofcom']; ?></td>
										<td><div class="alert alert-warning"><i class="icon-check"></i><strong><?php echo $row['status']; ?></strong></div></td>
										<td class="empty" >
											<center>
												<a rel="tooltip" title="View Components" id="e<?php echo $id; ?>" href="components.php<?php echo '?id='.$id; ?>" class="btn btn-success">
													<i class="icon-list-alt"> View Components</i>
												</a>
											</center>
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