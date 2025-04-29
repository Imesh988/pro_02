<?php
include 'connection.php';

$name = $_POST['name'];
$batch_no = $_POST['batch'];
$course = $_POST['course_name'];
$index_num = $_GET['index_no'];
$x  = "UPDATE course SET name='$name',batch='$batch_no',course_name='$course' WHERE `index_no`='$index_num' ";

if ($connection->query($x) === true) {
    echo "<script>
        alert('Student Record Updated Successfull');
        window.location.href = 'cur_view.php';
          </script>";
} else {
    echo "Error: " . $connection->error;
}
?>