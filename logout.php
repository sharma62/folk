<?php 
    include 'database.php';
    include 'function.inc.php';
    session_start();
      session_destroy();
      redirect('login.php');
    
    
?>