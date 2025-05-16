<?php 
session_start();
unset($_SESSION['isİnside']);

session_destroy();
header('location: ' . 'index.php');
die();
?>