<?php
include 'connection.php';

$name = $_POST['name'];
$hydro_ma = $_POST['hyd_machi'];
$engin_op = $_POST['engi_machi'];
$op = $_POST['operator'];
$cou_id = $_GET['course_id'];
$x  = "UPDATE subject SET name='$name',hyd_machi='$hydro_ma',engi_machi='$engin_op',operator='$op' WHERE `course_id`='$cou_id' ";

if ($connection->query($x) === true) {
    echo "<script>
        alert('Student Record Updated Successfull');
        window.location.href = 'subject_view.php';
          </script>";
} else {
    echo "Error: " . $connection->error;
}
?>