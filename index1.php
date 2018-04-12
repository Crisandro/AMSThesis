<?php include('header.php'); ?>
    <body id="login" onload="homepage()">
        <div class="container">
            <div class="container-fluid">
                <div class="row-fluid">
                    <!--ang menu sa kilid-->
                    <?php include('sidebar.php'); ?>
                    <div class="span8" id="content">
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