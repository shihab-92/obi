<?php 
session_start();
// $server = 'shihabshararcom.ipagemysql.com';
// $user = 'surveyobi';
// $pass = 'surveyobi';
// $db = 'surveyobi';
// $Database = new mysqli($server, $user, $pass, $db);

$server = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'surveyobi';
$Database = new mysqli($server, $user, $pass, $db);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);
 ?>

