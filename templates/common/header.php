<?php
    session_start();
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$base_dir = dirname(__FILE__, 3);

	require_once($base_dir.'/dbcon.php');
    
    function render_header($title){
    	$base_url="http://".$_SERVER['SERVER_NAME'].'/phplearn/';
    	?>
    	<!doctype html>
		<html lang="en">
		  <head>
		    <!-- Required meta tags -->
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">

		    <!-- Bootstrap CSS -->
		    <link href="<?= $base_url.'assets/css/bootstrap.min.css'?>" rel="stylesheet">

		    <!--sweetalet 2-->
			<link  href="<?= $base_url.'assets/css/sweetalert2.min.css'?>" rel="stylesheet">


		    <title><?= $title ?></title>
		</head>
		<body>
    	<?php
    }


?>
