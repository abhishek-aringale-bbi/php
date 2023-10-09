<?php
    
    require_once '../controller/config.php'; 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // include 'Controller/config.php';

        $username = $_POST["username"];
        $password = $_POST["password"];
        // echo $username;
        $sql = "Select * from users where username='$username' AND password='$password'";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        // echo $result;
        $num = mysqli_num_rows($result);
        // echo $num;
        if ($num == 1)
        {
            // echo "1";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password']= $password;
            header("location: todo.php");
        }
        else{
            echo "Invalid Credentials";
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Login</h1>
    <div class="container">
        <form action="login.php" id="form" method="post" >
            <div class="box">
                <label for="username">UserName:</label>
                <input type="text" name="username" id="" require>
            </div>

            <div class="box">
            <label for="password">Password:</label>
            <input type="text" name="password" id="" require>
            </div>

            <div class="box">
            <input type="submit" value="Submit">
            </div>
            
            <a href="signup.php">SignUp</a>
            <a href="forgotpass.php">Forgot Password</a>
        </form>
    </div>
</body>
</html>