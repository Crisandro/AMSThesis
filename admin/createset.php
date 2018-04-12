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
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Add Device</div>
                            <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="sets.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                                <script type="text/javascript">
                                $(document).ready(function(){
                                $('#return').tooltip('show');
                                $('#return').tooltip('hide');
                                });
                                </script>
                            </div>

    		                <div class="block-content collapse in">
                                <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details. Each set could only have one device type.</div>
        						<form class="form-horizontal" method="post">
    								
                                    <div class="control-group">
                                        <label class="control-label" for="inputName">Set Name</label>
                                        <div class="controls">
                                        <input type="text" class="span8" name="set_name" id="inputName" placeholder="Set Name" required>
                                        </div>
                                    </div>
                                    <!-- Monitor -->
                                    <div class="control-group">
                                        <label class="control-label" >Monitor</label>
    	                                <div class="controls">
    		                                <select name="monitor" class="chzn-select"/>
        		                                <option></option>
        	                                    <?php 
                                                    $moni=mysql_query("select * from stdevice where dev_id = 8 && assigned_set = '' 
                                                        && dev_status ='Available'")
                                                    or die(mysql_error());
            	                                    while ($row=mysql_fetch_array($moni)){
        										?>
            		                                <option>
                                                        <?php echo $row['dev_serial']; ?>
                                                    </option>
        		                                <?php } ?>
    		                                </select>
                                        </div>
                                    </div>

                                    <!-- System Unit -->
                                    <div class="control-group">
                                        <label class="control-label" >System Unit</label>
                                        <div class="controls">
                                            <select name="Systemunit" class="chzn-select"/>
                                                <option></option>
                                                <?php 
                                                    $systuni=mysql_query("select * from stdevice where dev_id = 9 && assigned_set = '' 
                                                        && dev_status ='Available'")
                                                    or die(mysql_error());
                                                    while ($row=mysql_fetch_array($systuni)){
                                                ?>
                                                    <option>
                                                        <?php echo $row['dev_serial']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Keyboard -->
                                    <div class="control-group">
                                        <label class="control-label" >Keyboard</label>
                                        <div class="controls">
                                            <select name="Keyboard" class="chzn-select"/>
                                                <option></option>
                                                <?php 
                                                    $keybo=mysql_query("select * from stdevice where dev_id = 11 && assigned_set = '' 
                                                        && dev_status ='Available'")
                                                    or die(mysql_error());
                                                    while ($row=mysql_fetch_array($keybo)){
                                                ?>
                                                    <option>
                                                        <?php echo $row['dev_serial']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Mouse -->
                                    <div class="control-group">
                                        <label class="control-label" >Mouse</label>
                                        <div class="controls">
                                            <select name="Mouse" class="chzn-select"/>
                                                <option></option>
                                                <?php 
                                                    $mous=mysql_query("select * from stdevice where dev_id = 10 && assigned_set = '' 
                                                        && dev_status ='Available'")
                                                    or die(mysql_error());
                                                    while ($row=mysql_fetch_array($mous)){
                                                ?>
                                                    <option>
                                                        <?php echo $row['dev_serial']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                       							
    								<div id="hide">
        								<div class="control-group">
        									<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
        									<div class="controls">
        									   <select name="dev_status"  required>
        											<option>Available</option>
        										</select>
        									</div>
        								</div>
    								</div>

    								<div class="control-group">
    								<div class="controls">
    								<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>
    								</div>
    								</div>
    								<script type="text/javascript">
    								$(document).ready(function(){
    								$('#save').tooltip('show');
    								$('#save').tooltip('hide');
    								});
    								</script>
    							</form>
                                <?php
                                if (isset($_POST['save'])){
                                    $name = $_POST['set_name'];
                                    $dev_status = $_POST['dev_status'];
                                    $monitor = $_POST['monitor'];
                                    $sysunit = $_POST['Systemunit'];
                                    $keyboard = $_POST['Keyboard'];
                                    $mouse = $_POST['Mouse'];

                                    $query = mysql_query("select * from sets where name = '$name' ")
                                    or die(mysql_error());
                                    $count = mysql_num_rows($query);

                                    if ($count > 0){ ?>
                                        <script>
                                            alert('Name Already Exist');
                                            window.location = "createset.php";
                                        </script>
                                    <?php
                                        }
                                    else{
                                        mysql_query("insert into sets values (null,'$name','$dev_status')")
                                        or die(mysql_error());
                                                              
                                        //Monitor              
                                        mysql_query("UPDATE stdevice SET assigned_set = '$name' WHERE dev_serial = '$monitor'")
                                        or die(mysql_error());
                                        //System Unit
                                        mysql_query("UPDATE stdevice SET assigned_set = '$name' WHERE dev_serial = '$sysunit'")
                                        or die(mysql_error());
                                        //Keyboard
                                        mysql_query("UPDATE stdevice SET assigned_set = '$name' WHERE dev_serial = '$keyboard'")
                                        or die(mysql_error());
                                        //Mouse
                                        mysql_query("UPDATE stdevice SET assigned_set = '$name' WHERE dev_serial = '$mouse'")
                                        or die(mysql_error());

                                        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Created New Set : $name')")
                                        or die(mysql_error());
                                        }
                                        
                                    ?>
                                    <script>
                                        window.location = "sets.php";
                                        $.jGrowl("Set Successfully Made", { header: 'Set Add' });
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