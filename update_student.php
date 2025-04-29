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
              <h1>UPDATE STUDENT DETAILS</h1>
              <?php
              include 'connection.php';
              $student_id = $_GET['st_id'];
              $sql = "SELECT * FROM student WHERE st_id = '$student_id'";
              $result = $connection->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    $f_name = $row['f_name'];
                    $l_name = $row['l_name'];
                    $te_p = $row['tp'];
                    $password = $row['password'];
                    $city = $row['city'];
                }
              }
              ?>
              <form action="update_student_conn.php?st_id=<?php echo $_GET['st_id'] ?>" method="POST"> 
              <div class="class container">
                 <div class="row p-2"> 
                     <input type="text" value="<?php echo "$f_name"; ?>" name="f_name" class="class form-container" placeholder="FIRST NAME">
                    </div>

                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$l_name"; ?>" name="l_name"  class="class form-container" placeholder="LAST NAME">
                    </div>

                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$te_p"; ?>" name="tp" class="class form-container" placeholder="TELEPHONE NUMBER">
                    </div>

                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$password"; ?>" name="password" class="class form-container" placeholder="PASSWORD">
                    </div>
                     
                    <div class="row p-2 "> 
                     <input type="text" value="<?php echo "$city"; ?>" name="city" class="class form-container" placeholder="CITY">
                     <div class="p-2 col-3">
                     <button type="submit" class="btn btn-success">Update</button>
                    
                  
                   </div>
              </form>
              <div class="container">
                <div class="col-12">
                    <div class="mt-6">
                    <a href="student_view.php" class="btn btn-primary mx-2 mt-2">view</a>
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

