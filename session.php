<?php
include('dbconnection.php');
session_start();

$user_check = $_SESSION['username'];
$ses_sql = mysqli_query($connection,"SELECT username FROM users where username = '$user_check' ");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['username'];

?>