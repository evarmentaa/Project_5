<?php
include('connection.php');
session_start();
$user_name=$_SESSION['username'];

$session_sql = mysqli_query($connection, "SELECT username FROM users WHERE username='$user_name'");

$row= mysqli_fetch_array($session_sql, MYSQLI_ASSOC);

$login_user=$row['username'];

if(isset($user_check))
{

header("Location: welcomeuser.php");

}
?>