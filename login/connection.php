<?php
$user = 'root';
$password = 'root';
$db = 'Poker';
$host = 'localhost';
$port = 3306;

$connection = mysqli_connect("localhost", "root", "root" );
$db = mysqli_select_db($connection, "Poker");
?>