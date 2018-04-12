<div class="span4" id="sidebar">
    <br /><br />

    <div class="title_index">
        <?php include('title.php'); ?>
    </div>



    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="active">
            <a onclick="homepage()">
                <i class="icon-chevron-right"></i>
                <i class="icon-home"></i>
                &nbsp;Dashboard
            </a>
        </li>

    <!--/.* information *-->
    <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2">
            <i class="icon-chevron-right"></i>
            <i class="icon-book"></i>
            &nbsp;Information
        <div class="muted pull-right"><i class="caret"></i></div></a>
        <ul id="bs2" class="collapse">
            <li class="">
                <a onclick="viewabout()"><i class="icon-chevron-right"></i><i class="icon-file"></i> About</a>
            </li>
            <li class="">
                <a onclick="viewhistory()"><i class="icon-chevron-right"></i><i class="icon-file"></i> History</a>
            </li>
        </ul>
    </li>

</div>