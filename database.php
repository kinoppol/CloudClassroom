<?php

$server = "localhost";
$user = "root";
$passdb = "";
$db = "cc_db";
$connect = mysqli_connect( $server, $user, $passdb, $db )or die( "Connection Error" );
$connect->set_charset("utf8mb4");

?>