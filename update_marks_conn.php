<?php
include 'connection.php';

$name = $_POST['name'];
$hydr_ma_marks = $_POST['hyd_mach_mark'];
$engi_op_marks = $_POST['eng_mach_mark'];
$opr_marks = $_POST['operator_mark'];
$exm_nu = $_GET['ex_no'];
$x  = "UPDATE marks SET name='$name',hyd_mach_mark='$hydr_ma_marks',eng_mach_mark='$engi_op_marks',operator_mark='$opr_marks' WHERE `ex_no`='$exm_nu' ";

if ($connection->query($x) === true) {
    echo "<script>
        alert('Student Record Updated Successfull');
        window.location.href = 'marks_view.php';
          </script>";
} else {
    echo "Error: " . $connection->error;
}
?>