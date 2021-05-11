<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="yourPassword";
$dbname="bank_db";
$link = mysqli_connect($serverName ,$dbusername,$dbpassword, $dbname)
if (!$link) {
        echo mysqli_connect_error($link);
    }
   
$db_select = mysqli_select_db($link ,"bank_db") ;
if (!$db_select) {
        echo mysqli_error($link);
    }

?>
