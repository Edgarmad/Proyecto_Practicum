<?php
session_start();
$dbhost = 'localhost';
$dbname = 'sistema_practicum';
$dbuser = 'root';
$dbpass = '';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
?>