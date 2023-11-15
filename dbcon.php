<?php 

$connection_obj = mysqli_connect("localhost", "root", "aris0007", "test");

if(!$connection_obj) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
} else {
    //echo 'Connected successfully';
}

?>