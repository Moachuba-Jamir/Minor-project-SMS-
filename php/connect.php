<?php
// From 000webhost
$db_host ="localhost";
$db_user ="id19310107_localhost";
$db_pass ="TG)_bT(Alj_7vwL6";
$db_name ="id19310107_fook";

$db_con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
// $dsn = "mysql:host=$db_host;dbname=$db_name;charset=UTF8";
// using PDO library to avoid sql injections
// try{
//     $db = new PDO("mysql:host={$db_host};dbName={$db_name}",$db_user,$db_pass);
//     if($db){
//         echo "Connected to Database {$db_name} successfully";
//     }
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
//  catch(PDOException $e){
//     echo $e->getMessage();
//  }