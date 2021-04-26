<?php
session_start();
$dbhost = 'database-1.claawir8rmgn.us-east-2.rds.amazonaws.com';
$dbname = 'sistema_practicum';
$dbuser = 'admin';
$dbpass = 'sistemapracticum';
$port = '3306';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname,$port);
if($connection->connect_error){
    die("Conexión fallida: ".$connection->connect_error);
  }
?>