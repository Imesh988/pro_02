<?php
include 'connection.php';

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$te_p = $_POST['tp'];
$password = $_POST['password'];
$city = $_POST['city'];
$student_id = $_GET['st_id'];
$x  = "UPDATE student SET f_name='$f_name',l_name='$l_name',tp='$te_p',password='$password',city='$city' WHERE `st_id`='$student_id' ";

if ($connection->query($x) === true) {
    echo "<script>
        alert('Student Record Updated Successfull');
        window.location.href = 'student_view.php';
          </script>";
} else {
    echo "Error: " . $connection->error;
}
?>