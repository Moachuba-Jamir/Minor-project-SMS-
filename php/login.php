<?php
include_once 'connect.php';
session_start();

// if there is an active user with credentials in the db we redirect them to the index page

if(isset($_SESSION['enrol_no'])){
    header("Location: index.php");
}
if(isset($_REQUEST['login'])){
    $enrol = $_REQUEST['enrol'];
    $name = $_REQUEST['user_name'];
    $password = strip_tags($_REQUEST['pwd']);

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    if(empty($enrol)){
        $errorMsg[] = 'Must enter email';
    }
    else if(empty($password)){
        $errorMsg[] = 'Must enter password';
    }else if(empty($name)){
        $errorMsg[] = 'Wrong username';
    }
    // check enrollment no and password 

    else{
        try{
            $user_enrol = "SELECT * FROM users WHERE enrol_no = '$enrol'";
            $user_result = mysqli_query($db_con, $user_enrol);
            $user_ans = mysqli_fetch_assoc($user_result);
            $user_row = mysqli_num_rows($user_result);
            echo "Please enter your credentials again";
            if($user_row == 1){
                if(password_verify($password,$user_ans['mypassword'])){
                    // populatin the sesion variable
                    $_SESSION['enrol_no'] = $enrol; 
                    $_SESSION['user_name'] = $name; 
                $degree = "SELECT degree FROM users WHERE enrol_no = '$enrol'";
                $query = mysqli_query($db_con,$degree);
                $result = mysqli_fetch_assoc($query);
                $course = "SELECT course FROM users WHERE enrol_no = '$enrol'";
                $query1 = mysqli_query($db_con,$course);
                $result1 = mysqli_fetch_assoc($query1);
                    $_SESSION['degree'] = $result['degree']; 
                    $_SESSION['course'] = $result1['course']; 
                    header("Location: index.php");
                }
            }else{
                $errorMsg[] = 'wrong email or password';
            }
        } catch(Exception $e){
            $e->getMessage();
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
                    <form action="login.php" method="POST">
                    <div class="container warning col-lg-12 w-50">
                    <?php
                        if(isset($errorMsg)){
                        foreach($errorMsg as $e){
                        echo "<p class=' alert alert-danger '>.$e.</p>";
                        }
                        }
                    ?>
                    </div>
                        <input type="text" name="enrol" placeholder="Enter your Enrollment no...">
                        <br>
                        <br>
                        <input type="text" name="user_name" placeholder="Username">
                        <br>
                        <br>
                        <input type="password" name="pwd" placeholder="Password...">
                        <br>
                        <br>
                        <button type="submit" name="login" class="btn btnn">Log in</button>
                        <!-- <button class =" btnn" type="submit" name="submit">Sign in</button>  -->
                        <br>
                        <br>
                         <p class="register">&nbsp Don't have an account?&nbsp <a class="registerLink" href="signup.php">Register Now</a> </p>
                    </form>
            </div>
        </div>
</body>
</html>