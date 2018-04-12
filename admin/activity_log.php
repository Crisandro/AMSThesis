<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
				<div class="empty">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete?
                    </div>
                </div>

				<?php
	             $count_log=mysql_query("select * from activity_log");
	             $count = mysql_num_rows($count_log);
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> System User Activity Log</div>
								<div class="muted pull-right">
								Number of System user Activity Log: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
                            </div>

                            <div class="block-content collapse in">
                                
                                <div class="span12">
									<div class="pull-right">
									   <a href="print_activitylog.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
									   <script type="text/javascript">
									     $(document).ready(function(){
									     $('#print').tooltip('show');
									     $('#print').tooltip('hide');
									     });
									   </script>        	   
							         </div>		
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						            
										<thead>
										        <tr>
                                                
												<th>Date</th>
												<th>System User</th>
												<th>Action</th>

												</tr>

										</thead>
										<tbody>

                              		<?php
										$query = mysql_query("select * from  activity_log
										LEFT JOIN admin ON activity_log.username = admin.username
										order by date DESC")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id = $row['activity_log_id'];
										$username = $row['username'];
									?>

                                    <tr>
					                    

                                         <td><i class="icon-calendar"></i>&nbsp;
										 <?php  echo $row['date']; ?></td>
                                         <td><img id="avatar1" src="<?php echo $row['adminthumbnails']; ?>">&nbsp;
										 <?php echo $row['username']; ?></td>
                                         <td><i class="icon-ok-sign"></i>&nbsp;
										 <?php echo $row['action']; ?></td>

                                        </tr>

						                 <?php } ?>


										</tbody>
									</table>
								
                                </div>
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