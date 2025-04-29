<?php
include "connection.php";

if(isset($_GET['st_id'])){
    $student_id=$_GET['st_id'];

    $sql="delete from `student` where st_id = '$student_id'";
    $result = $connection -> query($sql);

    if($result){
        echo "<script>
    alert ('Deleted successfully.');
    window.location.href='student_view.php';
    </script>";
    }else{
        echo "<script>
    alert ('Deleted not successfully.');
    window.location.href='student_view.php';
    </script>";

    }
}
?>