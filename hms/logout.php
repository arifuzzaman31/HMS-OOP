<?php
include_once 'func.php';
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['un'])) 
	echo 'Session Expired';
else
	session_destroy();
	header('location:msg.php?session');
?>