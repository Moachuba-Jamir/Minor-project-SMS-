<?php
  require_once 'connect.php';
// initiates a session for the user, this gives us 
// access to a super global called $_SESSION (can be accessed anywhere)
// we can populate the session array with any data we want and the var
// is persistent across multiple pages
  session_start();

  $same_enrol[0][] = "You already have an account with us please log in instead";
// if the user is already authenticated we sent them to the login page
  if(isset($_SESSION['enrol_no'])){
    header("Location: login.php");  
  }

// next we check if the post method has been fired/executed
// or if the user has pressed the signup button
if(isset($_REQUEST['register'])){

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    $name = $_REQUEST['user_name'];
    $enrol = $_REQUEST['enrol'];
    $degree = $_REQUEST['degree'];
    $course = $_REQUEST['course'];
    $password = strip_tags($_REQUEST['pwd']);

// Register form error handling
if(empty($name)){
    $err[0][] = 'Username Required *';
 }
 if(empty($enrol)){
    $err[1][] = 'Enter your University Enrollment Number *';
 }

 if(empty($password)){
    $err[2][] = 'Provide a password *';
 }
 if(strlen($password<6)){
    $err[3][] = 'Password must be at least 6 characters *';
 }

//  if it doesn't exist we hash the pwd and store the details in the DB

if(empty($err)){
    $query = "SELECT enrol_no FROM users Where enrol_no = '$enrol'";
    $query1 = "SELECT user_name FROM users Where user_name = '$name'";
    $result = mysqli_query($db_con,$query);
    $result1 = mysqli_query($db_con,$query1);
    $ans = mysqli_fetch_assoc($result); 
    $ans1 = mysqli_fetch_assoc($result1); 

  
   try{
    // we insert the user data to the database
    // first we hash the password 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $insert_query = "INSERT INTO users(user_name,enrol_no,mypassword,degree,course) VALUES('$name','$enrol','$hashed_password','$degree','$course')";
    $result = mysqli_query( $db_con,$insert_query);
    header("Location: login.php");
   } 
   catch(Exception $e){
        $e->getMessage();
   }
     
    // using prepared statements (not working)
    // try{    
        //  connect to the database and check if the enrol no exists 
        // $select_stmt = $db->prepare("SELECT user_name,enrol_no FROM users WHERE enrol_no = :enroll");
        // $select_stmt->execute([':enroll' => $enrol]);
        // $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        // if(isset($row['enrol_no']) == $enrol){
        //     $err[1][] = "Enrollment Number already exists login instead";  
        // }

        // $query = "SELECT * from users WHERE id =1";
        // $result = mysqli_query($db_con,$query);
        // $ans = mysqli_fetch_assoc($result);
        // echo "<pre>";
        //  print_r($ans);
        // echo "</pre>";

    // }   
    // catch(PDOException $e){
    //     $pdoErr = $e->getMessage();
    // }
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    
</head>

<body>
    <div class="container loginContainer">
        <div class="row animation">
            <div class="col-lg-6 ratio ratio-16x9 col-lg-offset-3  col-md-offset-3 col-sm-offset-1">
                <video  class="oneVid" src="Assets/videos//phone1.mp4" autoplay loop></video>
            </div>
        </div>
    </div>
    <div class="row">
            <div class=" logo col-lg-6 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-3">
            <a href="index.php">
                    <img src="Assets/Images/logo.svg" alt="ICFAI university Logo" width="180". height="70">
                </a>
            </div>
        </div>
        <div class="row formContainer ">
            <div class=" formClass col-lg-6 col-lg-offset-6 col-md-offset-5 col-sm-offset-7 col-xs-offset-4">
                    <h4>Register</h4>
                    <br>
                    <form action="signup.php" method="POST">
                    <?php
                       if(isset($err[0])){
                        foreach($err[0] as $err1){
                            echo "<p class='small text-danger'>.$err1.</p>";
                            }
                       }
                            if(!empty($ans) && $ans['enrol_no'] === $enrol){
                                foreach($same_enrol[0] as $en){
                                echo $en;
                                }
                        }
                        ?>
                        <input type="text" name="user_name" placeholder="Provide a username..." >
                        <br>
                        <br>

                        <?php
                            if(isset($err[1])){
                            foreach($err[1] as $err1){
                            echo "<p class='small text-danger'>.$err1.</p>";
                            }
                       }
                      
                        ?>
                        <input type="text" name="enrol" placeholder="Enter your Enrollment no..." >
                        <br><br>
                         <div class="box">
                         <select name="degree" id="degree" required>
                        <option value="" disabled selected>Select your Degree</option>
                         <option value="UnderGraduate">Under_Graduate(UG)</option>
                            <option value="PostGraduate">Post_Graduate(PG)</option>
                         </select>
                        </div>
                         <br>
                         <?php
                          
                            if(isset($err[2])){
                             foreach($err[2] as $err2){
                                 echo "<p class='small text-danger'>.$err2.</p>";
                             }
                            }
                            
                       if(isset($err[3])){
                        foreach($err[3] as $err3){
                            echo "<p class='small text-danger'>.$err3.</p>";
                        }
                       }
                        ?>
                        <input type="password" name="pwd" placeholder="Password...">
                        <br>
                        <br>
                        <button type="submit" name ="register" class="btn btnn">Sign up</button>
                        <!-- <button class =" btnn" type="submit" name="submit">Sign in</button>  -->
                        <br>
                        <br>
                         <p class="register">&nbsp Already Registered?&nbsp <a class="registerLink" href="login.php">Log in</a> </p>
                    </form>
            </div>
        </div>
        <script src="signup.js"></script>
</body>
</html>