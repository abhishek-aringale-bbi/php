<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<?php
    
    require_once '../controller/config.php'; 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'Controller/config.php';

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email= $_POST["email"];
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) 
        VALUES ('$username', '$password', '$email');";
        echo sql;
        $result = mysqli_query($conn, $sql);

        header("location: login.php");

    }
?>



    <h1>SignUp</h1>
    <div class="container">
    <form action="signup.php" method="post" id="form">
        <div class="box">

            <label for="username">UserName:</label>
            <input type="text" name="username" id="">
        </div>

        <div class="box">

            <label for="name">Password:</label>
            <input type="password" name="password" id="">
        </div>

        <div class="box">

            <label for="email">Email:</label>
            <input type="email" name="email" id="">
        </div>

        <div class="box">
            <button type="submit">Submit</button>
        </div>
        <p>alredy a user?
        <a href="login.php">click here to Login</a>
        </p>
    </form>
    </div>
</body>
</html>