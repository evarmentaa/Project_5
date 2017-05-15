<?php
require('registercode.php'); // Include Login Script
/*
    if (isset($_SESSION['username'])) 
    {
        header('Location: home.php');
    }   
    
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
</head>

<body>
    <!--Navbar-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand mb-0">Poker</h1>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
                            </li>

                        </ul>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class ="nav-link" href="logout.php">Login</a>
                                </li>
                             <li class ="nav-item">
                                <a class="nav-link active" href="Register.php">Register</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <!-- End of Navbar-->
            </div>
        </div>
        <!--End of Row-->


        <div class="row">
            <div class="container">
                <form class="form-horizontal" action="" method="post" >
                 
                 <?php if(isset($success)){ ?><div class="alert alert-success" role="alert"> <?php echo $sucess; ?> </div><?php } ?>
                  <?php if(isset($fail)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fail; ?> </div><?php } ?>

                    <fieldset>

                        <legend>Register Here</legend>
                        
               
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Name</label>
                            <div class="col-md-4">
                                <input id="textinput" name="name" placeholder="Type your name" class="form-control input-md" required="" type="text"
                                <span class="help-block"> </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email/Username</label>
                            <div class="col-md-4">
                                <input name="username" placeholder="Type your Email/Username" class="form-control input-md" required="" type="text">
                                <span class="help-block"> </span>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Password</label>
                            <div class="col-md-4">
                                <input name="password" placeholder="Password" class="form-control input-md" required="" type="password">
                                <span class="help-block"> </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Confirm Password</label>
                            <div class="col-md-4">

                                <input name="confirm_password" placeholder="Confirm Password" class="form-control input-md" required="" type="password">
                                <span class="help-block"> </span>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="register"> </label>
                            <div class="col-md-4">
                                <input type="submit" value="Register" name="submit" class="btn btn-primary">

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!--End of Container-->
