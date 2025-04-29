<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body{background-image:url("img/WhatsApp Image 2024-09-08 at 12.18.29_da2159b4.jpg");
    background-size:cover;
    background-position: center;
    background-repeat:no-repeat;
    height:100vh;
    marmargin: 0;
    table{width: 100%;
      height: 25px;
      border:3px solid #000;
      border-collapse:collapse;
    }
    th{background: color #f2f2f2 ;
    font-weight: bold;
    padding: 10px;
    border: 1px solid #000;
    }
    td{padding: 20px;
    border: 1px solid #000;
  }
  th{height: 50px;}   }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col mt-7">
      <?php 

include 'connection.php';
$sql = "SELECT * FROM course";
$result = $connection->query($sql);
?>
    
<div class="col-12 mt-2">
    <div class="card p-2">
        <h1 class="card-title mx-2">STUDENT'S COURSE VIEW</h1>
        <div class="P-2">
        <table class="table">
            
  <thead>
    <tr>
      <th scope="col">index number</th>
      <th scope="col">name</th>
      <th scope="col">batch</th>
      <th scope="col">course</th>
      <th scope="col">course one</th>
      

    </tr>
  </thead>
  <?php
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['index_no']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['batch']."</td>
                        <td>".$row['course_name']."</td>
                       
                        <td>
                          <a href='update_cur.php?index_no=" . $row['index_no'] ." ' class='btn btn-success'>Update</a>
                          <a href='delete_cur.php?index_no=" . $row['index_no'] ." ' class='btn btn-danger'>Delect</a>
                        </td>
                    </tr>";
            }
        }
        ?>
        
  </table>
  <a href="home.php" class="btn btn-primary mx-2 mt-2">home</a>
  <a href="index.php" class="btn btn-primary mx-2 mt-2">login</a>

      </div>
    </div>
  </div>





  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>


