<?php
include "connection.php";

if(isset($_GET['index_no'])){
    $index_num=$_GET['index_no'];

    $sql="delete from `course` where index_no = '$index_num'";
    $result = $connection -> query($sql);

    if($result){
        echo "<script>
    alert ('Deleted successfully.');
    window.location.href='cur_view.php';
    </script>";
    }else{
        echo "<script>
    alert ('Deleted not successfully.');
    window.location.href='customer_view.php';
    </script>";

    }
}
?>