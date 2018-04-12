<?php
    include('DBconnection/dbconn.php');
    dbcon();
?>

<html class="no-js">
    <head>
        <title>Asset Management System (A.M.S)</title>
        <meta name="description" content="Supply and Resource Inventory System">
		<meta charset="UTF-8">

        <!-- Bootstrap   -->
		<link href="images/logoAMS.png" rel="icon" type="image">
		<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen" type="text/css"/>
		<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"/>
		<link href="admin/bootstrap/css/font-awesome.css" rel="stylesheet" media="screen"/>
		<link href="admin/bootstrap/css/my_style.css" rel="stylesheet" media="screen"/>
		<link href="admin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen"/>
		<link href="admin/assets/styles.css" rel="stylesheet" media="screen"/>

        <!-- calendar css -->
		<link href="admin/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">

        <!-- index css -->
		<link href="admin/bootstrap/css/index.css" rel="stylesheet" media="screen"/>

        <!-- data table css -->
		<link href="admin/assets/DT_bootstrap.css" rel="stylesheet" media="screen"/>

        <!-- notification  -->
		<link href="admin/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>

        <!-- wysiwug  -->
		<link rel="stylesheet" type="text/css" href="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>

        <script src="admin/vendors/jquery-1.9.1.min.js"></script>
        <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="login" onload="viewdata()">
        <div class="container">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div id="content">
                        <div class="row-fluid">
                                <!--AJAX target Location ni diri dapita ang viewdata-->
                               <div id="viewdata"></div>
                        </div>
                    </div>
                </div>
            </div>

    		<?php include('admin/footer.php'); ?>
        </div>
    <?php include('script.php'); ?>
    </body>
</html>
<script src="ajax/index.js"></script>