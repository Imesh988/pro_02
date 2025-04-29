<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f_name = $_POST['fristNAME'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE f_name='$f_name'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['fristNAME'] = $f_name;
            header('Location:home.php');
        } else {
            echo "<script>
            alert('Invalid username or password.');
            window.location.href='index.php';
            </script>";
        }
    } else {
        echo "No user found with this username.";
    }
}

$connection->close();
