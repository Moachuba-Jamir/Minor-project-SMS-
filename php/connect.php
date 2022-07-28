<?php
// connecting to a remote server
$db_host ="remotemysql.com";
$db_user ="7WD0m5R0O0";
$db_pass ="uGCasyQLgS";
$db_name ="7WD0m5R0O0";

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