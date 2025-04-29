<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
     rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous">   
     <style>
    body{background-image:url("img/WhatsApp Image 2024-09-08 at 12.18.35_8bf09629.jpg");
    background-size:cover;
    background-position: center;
    background-repeat:no-repeat;
    height:100vh;
    marmargin: 0;   }
    </style>
</head>
<body>
   
    <div class="container">
      <div class="row justify-content-center">
          <div class="card mt-3 col-6">
              <h1>UPDATE STUDENT'S COURSE</h1>
              <?php
              include 'connection.php';
              $index_num = $_GET['index_no'];
              $sql = "SELECT * FROM course WHERE index_no = '$index_num'";
              $result = $connection->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    $name = $row['name'];
                    $batch_no = $row['batch'];
                    $course = $row['course_name'];
                }
              }
              ?>
              <form action="update_cur_conn.php?index_no=<?php echo $_GET['index_no'] ?>" method="POST"> 
              <div class="class container">
                 <div class="row p-2"> 
                     <input type="text" value="<?php echo "$name"; ?>" name="name" class="class form-container" placeholder="NAME">
                    </div>
                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$batch_no"; ?>" name="batch"  class="class form-container" placeholder="BATCH">
                    </div>
                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$course"; ?>" name="course_name" class="class form-container" placeholder="COURSE NAME">
                    <div class="row p-2 col-3"> 
                        <button type="submit" class="btn btn-success">Update</button>
             </div>
              </form>
              <div class="container">
                <div class="col-12">
                    <div class="mt-6">
                    <a href="cur_view.php" class="btn btn-primary mx-2 mt-2">view</a>
                    </div>
                
                </div>
              </div>
              
             

                           
         </div>
    </div> 
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
 crossorigin="anonymous">
</script>

</body>
</html>

