<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "trial"; 

$connection = mysqli_connect($server, $username, $password, $database);

if(! $connection ) {
   die('Could not connect: ' . mysqli_error());
}
?>  



