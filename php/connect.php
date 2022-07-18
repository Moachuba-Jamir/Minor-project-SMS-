<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="fook";
$con =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con){
    die("Connection failed!");
}