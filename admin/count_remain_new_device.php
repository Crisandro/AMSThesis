<?php
    $query_yes_new = mysql_query("select * from stdevice
    where NOT EXISTS
    (select * from location_details where stdevice.id = location_details.id)
    and dev_status='Unused' ORDER BY stdevice.id DESC")
    or die(mysql_error());
    $count_no_new = mysql_num_rows($query_yes_new);
?>
<?php
    $query_no_new = mysql_query("select * from stdevice
    where NOT EXISTS
    (select * from location_details where stdevice.id = location_details.id)
    and dev_status='none' ORDER BY stdevice.id DESC")
    or die(mysql_error());
    $count_yes_new = mysql_num_rows($query_no_new);
?>
<?php
    $not_read_new = $count_no_new -  $count_yes_new;
?>
<?php
    $count_item=mysql_query("select * from sets where Status='Available'");
    $count = mysql_num_rows($count_item);
?>
<?php
    $count_device=mysql_query("select * from stdevice where dev_status='Available'");
    $count1 = mysql_num_rows($count_device);
?>
<?php
    $countni = $count1 - ($count*4);
?>