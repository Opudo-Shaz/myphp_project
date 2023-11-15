<?php
   session_start();

   session_destroy();
   
   echo 'You have been logged out!';
   header('Refresh: 2; URL = registration/login.php');
?>