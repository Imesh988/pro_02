<?php
include "connection.php";

if(isset($_GET['course_id'])){
    $cou_id=$_GET['course_id'];

    $sql="delete from `subject` where course_id = '$cou_id'";
    $result = $connection -> query($sql);

    if($result){
        echo "<script>
    alert ('Deleted successfully.');
    window.location.href='subject_view.php';
    </script>";
    }else{
        echo "<script>
    alert ('Deleted not successfully.');
    window.location.href='subject_view.php';
    </script>";

    }
}
?>