<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exm_nu = $_POST['exa_no'];
    $name = $_POST['name'];
    $hydr_ma_marks = $_POST['hy_ma_mar'];
    $engi_op_marks = $_POST['en_op_mar'];
    $opr_marks = $_POST['oper_mar'];
    
    $sql = "INSERT INTO marks (ex_no,name,hyd_mach_mark,eng_mach_mark,operator_mark)
    VALUES ('$exm_nu','$name','$hydr_ma_marks','$engi_op_marks','$opr_marks')";


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