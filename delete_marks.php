<?php
include "connection.php";

if(isset($_GET['ex_no'])){
    $exm_nu=$_GET['ex_no'];

    $sql="delete from `marks` where ex_no = '$exm_nu'";
    $result = $connection -> query($sql);

    if($result){
        echo "<script>
    alert ('Deleted successfully.');
    window.location.href='marks_view.php';
    </script>";
    }else{
        echo "<script>
    alert ('Deleted not successfully.');
    window.location.href='marks_view.php';
    </script>";

    }
}
?>