<?php
session_start();
include_once 'headernav.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User_Error</title>
</head>
<body>
    
<div class="container d-flex align-items-center justify-content-center h-100">
    <div class="row h-100">
        <div class="col-lg-6">
        <div class="col-lg-6 d-flex aligns-items-center justify-content-center vidContainer">
            <video class="oneVid1 ratio ratio-16x9" src="Assets/videos/error.mp4" muted playsinline autoplay loop></video>
        </div>
        </div>
        <div class="col-lg-5 mt-5">
        
        <p class="warning"> Error: You don't seem to be a current ICFAI student! <br>
        or you seem to have entered a non valid enrolment no<br>
        Only current students of ICFAI can access the Analytics panel<br>
     <i><strong>Your credentials are: &nbsp</strong></i> <br>
        <label for="name">name</label> '<?= $_SESSION['user_name']?>' <br>
        <label for="enrol_no">Enrolment number: &nbsp </label> '<?= $_SESSION['enrol_no']?>' <br>
</p>
<ul>
                <li>
                    <a href="signup.php">Register</a>
                </li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </div>
    </div>
  </div>


</body>
</html>