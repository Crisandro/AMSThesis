<br /><br /><br /><br /><br />
<!-- block -->
<?php
    include ('DBconnection/dbconn.php');
    dbcon();
?>
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min1.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="admin/bootstrap/css/sb_admin.css" type="text/css" media="screen" />
<link rel="stylesheet" href="admin/bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" media="screen"  />

<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
        <div class="muted pull-right"><?php include('time.php'); ?></div>
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
                                                <div>All Stocked<br />Devices</div><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div>All&nbsp;&nbsp;<br />Locations</div><br/>
                                        </div>
                                    </div>
    							 </div>
                                </div>

                            </div>
                        </div>

                        <?php
                	     $new = mysql_query("select * from stdevice
                	     LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
                		 where dev_status='Unused'")or die(mysql_error());
                		 $new = mysql_num_rows($new);
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
                                            <div class="huge"><?php echo $new;?></div>
                                            <div>Unused Devices</div><br/>
                                        </div>
                                    </div>
    							 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /block -->