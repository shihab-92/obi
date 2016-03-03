<?php 

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'surveyobi';
$Database = new mysqli($server, $user, $pass, $db);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);

session_start();
 ?>