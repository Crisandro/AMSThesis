<div class="span3" id="sidebar">
    <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">
    <?php                        
    include('count_remain_new_device.php');
    ?>
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="active">
            <a href="dashboard.php">
                <i class="icon-chevron-right"></i>
                <i class="icon-home"></i>
                &nbsp;Dashboard
            </a>
        </li>

        <!--/.* manage device sidebar*-->
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs">
                <i class="icon-chevron-right"></i>
                <i class="icon-tablet icon-large"></i>
                &nbsp;Manage Items
                <div class="muted pull-right">
                    <i class="caret"></i>
                </div>
            </a>
            <ul id="bs" class="collapse">
                <li class="">
                    <a href="device_stocks.php">
                        <i class="icon-chevron-right"></i>
                        <i class="icon-desktop"></i>
                        Items / Stocks
                    </a>
                </li>
                <li class="">
                    <a href="dev_name.php">
                        <i class="icon-chevron-right"></i>
                        <i class="icon-folder-open-alt"></i>
                        Item Type
                    </a>
                </li>
                <li>
                    <a href="Unuseddevice.php">
                        <i class="icon-chevron-right"></i>
                        <i class="icon-laptop"></i>
                        Assign<span class="label label-success">Available</span>Items
                        <?php if($countni == '0'){
                        }else{ ?>
                            <span class="badge badge-info"><?php echo $countni; ?></span>
                        <?php } ?>
                    </a>
                </li>
                <li>
                    <a href="sets.php">
                        <i class="icon-chevron-right"></i>
                        <i class="icon-laptop"></i>
                        Assign<span class="label label-success">Available</span>Sets
                        <?php if($count == '0'){
                        }else{ ?>
                            <span class="badge badge-info"><?php echo $count; ?></span>
                        <?php } ?>
                    </a>
                </li>
            </ul>
    </li>

        <!--/.* manage location sidebar*-->
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Location
            <div class="muted pull-right"><i class="caret"></i></div></a>
            <ul id="bs1" class="collapse">
                <li class="">
                    <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Device Location</a>
                </li>
                <li class="">
                    <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Add Location</a>
                </li>
            </ul>
        </li>

        <!--/.* manage SRIS user sidebar*-->
        <li class="">
            <a href="admin_user.php" >
                <i class="icon-chevron-right"></i>
                <i class="icon-user"></i>
                &nbsp;System User

            </a>
        </li>

        <!-- System Log sidebar-->
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log
            <div class="muted pull-right"><i class="caret"></i></div></a>
            <ul id="bs3" class="collapse">
                <li class="">
                    <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Activity Log</a>
                </li>
                <li class="">
                    <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                </li>
            </ul>
        </li>

        <!--search button-->
        <li class="">
            <a href="#myModal1" data-toggle="modal" tabindex="-1" >
                <i class="icon-chevron-right"></i>
                <i class="icon-search icon-large"></i>
                &nbsp;Advance Search

            </a>
        </li>
    </ul>
    <?php include('search_form1.php'); ?>
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="">
            <a href="recyclebin.php" >
                <i class="icon-chevron-right"></i>
                <i class="icon-trash icon-large"></i>
                <span class="label label-danger" style="background-color:B40000">Deadpool</span>
            </a>
        </li>
    </ul>
</div>