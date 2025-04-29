<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<style>
       .container {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .section {
            width: 30%;
            border: 1px solid #ddd;
            padding: 10px;
        }
        img {
            width: 100%;
            height: auto;
        }
        button {
            margin: 5px;
        }
        body{background-image:url("imeage/st ma 7.avif");
    background-size:cover;
    background-position: center;
    background-repeat:no-repeat;
    height:100vh;
    marmargin: 0;   }
    h1,div{
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
     color:skyblue;

    }
    </style>
<body>
  <h1 style="color:black"> HYTECK  LANKA</h1>
  
  <div class="container">
    <div class="col-4">
      <img src="imeage/st ma 3.webp" alt=""> 
      <div class="card">
      <div class="card-body">
      <h5 class="card-title" style="font-family: 'Dancing Script', cursive; font-size: 24px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #333;">Your course</h5>
      <p class="card-text">Select Your Course</p>
        <a href="cur.php" class="btn btn-info mx-2 mt-2">select</a>
        <a href="cur_view.php" class="btn btn-warning mx-2 mt-2">view</a>
        <a href="index.php" class="btn btn-success mx-2 mt-2">login</a>
      
      </div>
      </div>  
    </div>
    <div class="col-4">
    <img src="imeage/st ma 5.jpg" alt=""> 
      <div class="card">
        <div class="card-body">
        <h5 class="card-title" style="font-family: 'Dancing Script', cursive; font-size: 24px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #333;">Your Subject</h5>
        <p class="card-text">Select Your Subject</p>
          <a href="subject.php" class="btn btn-info mx-2 mt-2">select</a>
          <a href="subject_view.php" class="btn btn-warning mx-2 mt-2">view</a>
          <a href="index.php" class="btn btn-success mx-2 mt-2">login</a>
          
        </div>
      </div>
    </div>
    <div class="col-4">
    <img src="imeage/st ma 4.avif" alt=""> 
      <div class="card">
        <div class="card-body">
        <h5 class="card-title" style="font-family: 'Dancing Script', cursive; font-size: 24px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #333;">Your marks</h5>
        <p class="card-text">Enter Your Marks</p>
          <a href="marks.php" class="btn btn-info mx-2 mt-2">enter</a>
          <a href="marks_view.php" class="btn btn-warning mx-2 mt-2">view</a>
          <a href="incex.php" class="btn btn-primary mx-2 mt-2">login</a>
          
          </form>

        </div>
      </div>
    </div>
  </div>
  
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
