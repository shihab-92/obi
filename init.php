<?php 
ob_start();
session_start();
// $server = 'shihabshararcom.ipagemysql.com';
// $user = 'surveyobi';
// $pass = 'surveyobi';
// $db = 'surveyobi';
// $Database = new mysqli($server, $user, $pass, $db);


// $server = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'surveyobi';
// $Database = new mysqli($server, $user, $pass, $db);


$server = '94.73.147.210';
$user = 'u6523146_edoram';
$pass = '4kYe8AD96';
$db = 'u6523146_surveyobi';
$Database = new mysqli($server, $user, $pass, $db);


// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);
 ?>