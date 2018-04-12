<?php
    include('../DBconnection/dbconn.php');
    dbcon();
 ?>
 <br /><br /><br /><br /><br />
<div class="block" id="block_bg">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left">&nbsp;About</div>
        <div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" onclick="homepage()"><i class="icon-arrow-left"></i> Back</a></div>
            <script type="text/javascript">
                $(document).ready(function(){
                $('#return').tooltip('show');
                $('#return').tooltip('hide');
                });
            </script>
    </div>
    <div class="block-content collapse in">
        <div class="span11">
              <pre>
                <span style="font-size:16px"><strong>Mission</strong></span>
              </pre>
              <p style="text-align:left">
                <span style="font-family:arial,helvetica,sans-serif; font-size:medium">
                    <span style="font-size:large">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </span>
              </span>
                    &nbsp; &nbsp;
              <span style="font-size:18px">
                    <?php
                      $query = mysql_query("select * from content where idcontent = 1")
                      or die(mysql_error());
                      $row = mysql_fetch_array($query);
                    ?>
                    <?php echo $row['texts']; ?>
              </span>
              </p>
              <hr>
              <pre>
                <span style="font-size: 16px;"><strong>Vision</strong></span>
              </pre>
              <p>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="font-size: large;">
                    <?php
                      $query = mysql_query("select * from content where idcontent = 2")
                      or die(mysql_error());
                      $row = mysql_fetch_array($query);
                    ?>
                    <?php echo $row['texts']; ?>
                </span><br /><br />
              </p>
        </div>
    </div>
</div>