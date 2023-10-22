<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection_obj = mysqli_connect("localhost", "root", "aris0007", "test");

if(!$connection_obj) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
} else {
    //echo 'Connected successfully';
}

?>