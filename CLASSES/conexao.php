<?php

$host = "localhost";
$user ="root";
$password="admin";
$dbname="login";



$con = mysqli_connect($host,$user,$password)or die(mysqli_error()); 
//mysql_connect($host,$user,$password);

$bd = mysqli_select_db($con,$dbname);





?>