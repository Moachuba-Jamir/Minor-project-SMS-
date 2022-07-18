<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../php/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>

<body>
    <div class="container loginContainer">
        <div class="row animation">
            <div class="col-lg-6 ratio ratio-16x9 col-lg-offset-3  col-md-offset-3 col-sm-offset-1">
                <video  class="oneVid" src="../Assets//videos//phone1.mp4" autoplay loop></video>
            </div>
        </div>
    </div>
    <div class="row">
            <div class=" logo col-lg-6 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-3">
            <a href="index.php">
                    <img src="../Assets/Images/logo.svg" alt="ICFAI university Logo" width="180". height="70">
                </a>
            </div>
        </div>
        <div class="row formContainer ">
            <div class=" formClass col-lg-6 col-lg-offset-6 col-md-offset-5 col-sm-offset-7 col-xs-offset-4">
                    <h4>Sign in</h4>
                    <br>
                    <form action="" method="POST">
                        <input type="text" name="enrol" placeholder="Enter your Enrollment no...">
                        <br>
                        <br>
                        <input type="password" name="pwd" placeholder="Password...">
                        <br>
                        <br>
                        <input type="submit" class="btn btnn" value="Log in">
                        <!-- <button class =" btnn" type="submit" name="submit">Sign in</button>  -->
                        <br>
                        <br>
                         <p class="register">&nbsp Don't have an account?&nbsp <a class="registerLink" href="signup.php">Register Now</a> </p>
                    </form>
            </div>
        </div>
</body>
</html>