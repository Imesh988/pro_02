<?php 
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "student_mangment_system";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Fail to connect". $connction->connect_error);
}
?>