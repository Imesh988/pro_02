<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cou_id = $_POST['cus_id'];
    $name = $_POST['name'];
    $hydro_ma = $_POST['hy_ma'];
    $engin_op = $_POST['en_op'];
    $op = $_POST['oper'];
    
    $sql = "INSERT INTO subject (course_id,name,hyd_machi,engi_machi,operator)
    VALUES ('$cou_id','$name','$hydro_ma','$engin_op',' $op')";


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