<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index_num = $_POST['index_nu'];
    $name = $_POST['name'];
    $batch_no = $_POST['batch'];
    $course = $_POST['course'];
    
    $sql = "INSERT INTO course (index_no,name,batch,course_name)
    VALUES ('$index_num','$name','$batch_no','$course')";


   if($connection->query($sql)=== TRUE) {
    echo "<script>
    alert ('successfull this one.');
    window.location.href='home.php';
    </script>";
    } else {
        echo "<script>
    alert ('unsuccessfull this one.');
    window.location.href='home.php';
    </script>";
    }
}

$connection->close();
?>