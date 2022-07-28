<?php 
session_start();
include_once 'headernav.php';
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    </head>
<body>
 <div class="container card-container h-100">
    <div class="col-lg-12 d-flex align-items-center justify-content-center h-100">
    <div class="card" style="width: 18rem;">
  <img src="Assets/Images//logo.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><label for="name">Name:&nbsp </label><strong><?= $_SESSION['user_name']?></strong></p>
    <p class="card-text"><label for="enrol">course:&nbsp </label><strong><?= $_SESSION['course']?></strong></p>
    <p class="card-text"><label for="enrol">Degree:&nbsp </label><strong><?= $_SESSION['degree']?></strong></p>
    <p class="card-text"><label for="enrol">Enrolment no:&nbsp </label><strong><?= $_SESSION['enrol_no']?></strong></p>
    
    <a href="logout.php" class="btn btn-primary active">Log out</a>
  </div>
</div>
            </div>

   
        </div>
</body>
</html>