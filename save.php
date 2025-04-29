<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['studentID'];
    $f_name = $_POST['fristNAME'];
    $l_name = $_POST['lastNAME'];
    $te_p = $_POST['telephoneNUMBER'];
    $password = $_POST['password'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student (st_id,f_name,l_name,tp,password,city)
    VALUES ('$student_id','$f_name','$l_name','$te_p','$password','$city')";


   if($connection->query($sql)=== TRUE) {
    echo "<script>
    alert ('student registerd successfully.');
    window.location.href='index.php';
    </script>";
    } else {
        echo "<script>
    alert ('student registerd unsuccessfully.');
    window.location.href='index.php';
    </script>";
    }
}

$connection->close();
?>
