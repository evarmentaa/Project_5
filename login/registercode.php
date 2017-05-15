<?php
session_start();
require("connection.php");

$registererror ="";  //where we store errors

if(isset($_POST["submit"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]) ){
        $registererror = "Complete all fields in the form to register.";
    } 
    else {

        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query = "INSERT INTO `users` (name, username, password) VALUES ('$name', '$username', '$password')";
        $result = mysqli_query($connection, $query);

        if($result)
        {
            $success = "User Created Successfully.";
            $_SESSION['username']=$username;            
            header("Location: welcomeuser.php"); // Redirecting to other page  
        }
        else
        {
            $failed ="User Registration Failed.";
        }
    }

    }

?>
