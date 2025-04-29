<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f5f6f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .input-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>STUDENT REGISTER</h2>
        <?php if (isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>
        <form method="POST" action="save.php">
            <div class="input-group">
                <label for="">STUDENT ID</label>
                <input type="" id="studentID" name="studentID" required>
            </div>
            <div class="input-group">
                <label for="">FRIST NAME</label>
                <input type="" id="fristNAME" name="fristNAME" required>
            </div>
            <div class="input-group">
                <label for="">LAST NAME</label>
                <input type="" id="lastNAME" name="lastNAME" required>
            </div>
            <div class="input-group">
                <label for="">TELEPHONE NUMBER</label>
                <input type="text" id="telephoneNUMBER" name="telephoneNUMBER" required>
            </div>
            <div class="input-group">
                <label for="">PASSWORD</label>
                <input type="" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="">CITY</label>
                <input type="" id="city" name="city" required>
            </div>
            <input type="submit" value="New Register" class="submit-btn">

        </form><br>
        <form action="student_view.php">
        <input type="submit"  value="view" class="submit-btn">

        </form>
        </form><br>
        <form action="index.php">
        <input type="submit"  value="login" class="submit-btn">

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
