<?php
session_start();
//session_unset();
session_destroy();
echo 'You are logged out';
header('Refresh: 2; URL = index.php');
?>