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
              <h1>UPDATE STUDENT'S MARKS</h1>
              <?php
              include 'connection.php';
              $exm_nu = $_GET['ex_no'];
              $sql = "SELECT * FROM marks WHERE ex_no = '$exm_nu'";
              $result = $connection->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    $name = $row['name'];
                    $hydr_ma_marks = $row['hyd_mach_mark'];
                    $engi_op_marks = $row['eng_mach_mark'];
                    $opr_marks = $row['operator_mark'];
                }
              }
              ?>
              <form action="update_marks_conn.php?ex_no=<?php echo $_GET['ex_no'] ?>" method="POST"> 
              <div class="class container">
                 <div class="row p-2"> 
                     <input type="text" value="<?php echo "$name"; ?>" name="name" class="class form-container" placeholder="NAME">
                    </div>

                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$hydr_ma_marks"; ?>" name="hyd_mach_mark"  class="class form-container" placeholder="HYDROLIC MACHANIC MARKS">
                    </div>

                    <div class="row p-2"> 
                     <input type="text" value="<?php echo "$engi_op_marks"; ?>" name="eng_mach_mark" class="class form-container" placeholder="ENGINE OPERATOR MARKS">
                    </div>
                     
                    <div class="row p-2 "> 
                     <input type="text" value="<?php echo "$opr_marks"; ?>" name="operator_mark" class="class form-container" placeholder="OPERATOR MARKS">
                     <div class="p-2 col-3">
                     <button type="submit" class="btn btn-success">Update</button>
                    
                  
                   </div>
              </form>
              <div class="container">
                <div class="col-12">
                    <div class="mt-6">
                    <a href="marks_view.php" class="btn btn-primary mx-2 mt-2">view</a>
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

