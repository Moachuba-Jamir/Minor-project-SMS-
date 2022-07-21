<?php

include_once 'headernav.php';
include_once 'connect.php';
session_start();

if(!isset($_SESSION['enrol_no'])){
    header("Locaion: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Systems</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  
      <!-- Main Body container -->
 <div class="container main-container">
    <?php
         echo "<pre>";
         print_r($_SESSION);
         echo "</pre>";
    ?>
    <div class="row">
        <div class=" firstContainer left col-lg-6 d-flex aligns-items-center justify-content-center">
            <section class="secContainer">
                <h2 style="text-align:center;text-align-last:center;" class="d-flex aligns-items-center justify-content-center">ICFAI Student Management System</h2>
                <p class="sectionPara d-flex aligns-items-center justify-content-center">Grab your results now! Simply log in with your university Id and download your results for 
                    <h5 class="c1 animateMe col-lg-9 d-flex aligns-items-center justify-content-center">c1, c2 & End semester Exams</h5>
                </p>
                <div class="row mainbtnContainer">
                    <div class="col-lg-4 col-md-6 col-sm-6 btnContainer  ">
                        <button class="ms-4 btnn">moachuba</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 btnContainer ">
                       <a href="results.php"> <button class="btnn">Results</button></a>
                    </div>
                </div>
                <br>
            </section>
        </div>
        <div class="col-lg-6 d-flex aligns-items-center justify-content-center">
            <video class="oneVid ratio ratio-16x9" src="../Assets/videos/final.mp4" muted playsinline autoplay loop></video>
        </div>
    </div>
    
 </div>

 <!-- second container -->
 <div class=" secondContainer container-fluid d-flex justify-content-center align-items-center secondContainer">
    <div class="row container">
        <div class="col-lg-6">
            this is the first column
        </div>
        
        <div class="col-lg-6">
            this is the first column
        </div>
    </div>
 </div>
</body>

</html>