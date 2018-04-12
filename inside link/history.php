<?php
    include('../DBconnection/dbconn.php');
    dbcon();
?>
<br /><br /><br /><br /><br />
<div id="block_bg" class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left">&nbsp;History</div>
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
               <div class="container-fluid">
                  <pre>
                    <span style="font-size:16px"><strong>History</strong></span>
                  </pre>
                  <p style="text-align: justify;">
                        <span style="font-family:arial,helvetica,sans-serif; font-size:medium">
                            <?php
                              $query = mysql_query("select * from content where idcontent = 3")
                              or die(mysql_error());
                              $row = mysql_fetch_array($query);
                            ?>
                            <?php echo $row['texts']; ?>
                  </p>
            </div>
        </div>
    </div>
</div>