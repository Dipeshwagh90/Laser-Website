<?php

$hostname="localhost";
$dbuname="root";
$dbpass="";
$dbname="laser_db";

$conn=new mysqli($hostname,$dbuname,$dbpass,$dbname);

if($conn!=true){
    echo trigger_error();
}
?>
 