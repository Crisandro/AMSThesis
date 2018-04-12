<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
		    <?php include('dashboard_slidebar.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Welcome! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
				            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                        </div>
                        <div class="block-content collapse in">
			                <div class="span12">
                                <div class="block-content collapse in">
                                    <div id="page-wrapper">
                                        <div class="row-fluid">


                                            <div class="span4">
                                                <?php
                                                $stocks = mysql_query("select * from stdevice
                                                LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")
                                                or die(mysql_error());
                                            	$stocks = mysql_num_rows($stocks);
                                                ?>
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br/>
                                                                    <i class="fa fa-desktop fa-5x"></i><br/>
                                                                </div>
                                                                <div class="span8 text-right"><br/>
                                                                    <div class="huge"><?php echo $stocks; ?></div>
                                                                    <div>All Stocked</div><br/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="device_stocks.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View Details</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>


                                            <?php
                                    	     $location = mysql_query("select * from stlocation")or die(mysql_error());
                                    		 $location = mysql_num_rows($location);
                                    		 ?>
                                            <div class="span4">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                        							  <div class="container-fluid">
                                                        <div class="row-fluid">
                                                            <div class="span3"><br/>
                                                               <i class="fa fa-sitemap fa-5x"></i><br/>
                                                            </div>
                                                            <div class="span8 text-right"><br/>
                                                                <div class="huge"><?php echo $location;?></div>
                                                                <div>Location</div><br/>
                                                            </div>
                                                        </div>
                        							 </div>
                                                    </div>
                                                    <a href="device_location.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View Details</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>


                                             <?php
                                    	     $unused = mysql_query("select * from stdevice
                                    	     LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
                                    		 where dev_status='Available'")or die(mysql_error());
                                    		 $unused = mysql_num_rows($unused);
                                    		 ?>
                                             <div class="span4">
                                                <div class="panel panel-green">
                                                    <div class="panel-heading">
                        							  <div class="container-fluid">
                                                        <div class="row-fluid">
                                                            <div class="span3"><br/>
                                                              <i class="fa fa-share-square fa-5x"></i><br/>
                                                            </div>
                                                            <div class="span8 text-right"><br/>
                                                                <div class="huge"><?php echo $unused;?></div>
                                                                <div>Available Items</div><br/>
                                                            </div>
                                                        </div>
                        							 </div>
                                                    </div>
                                                    <a href="unuseddevice.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View Details</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
             </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>