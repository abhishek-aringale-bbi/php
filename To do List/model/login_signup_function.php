<?php
require_once '../controller/config.php';
function login()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // include 'Controller/config.php';

        $username = $_POST["username"];
        $password = $_POST["password"];
        // echo $username;
        $sql = "Select * from users where username='$username' AND password='$password'";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        echo $result;

        // echo $result;
        $num = mysqli_num_rows($result);
        echo $num;
        if ($num == 1) {
            echo "1";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location: ../view/todo.php");
        } else {
            echo "Invalid Credentials";
            exit;
        }
    }
}

function signup()
{
    require_once '../controller/config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'Controller/config.php';

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sql = "INSERT INTO `users` (`username`, `password`, `email`)
        VALUES ('$username', '$password', '$email');";
        echo sql;
        $result = mysqli_query($conn, $sql);

        header("location: login.php");

    }
}
