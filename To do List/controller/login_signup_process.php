<?php

require_once '../controller/config.php';
include '../model/login_signup_function.php';

print_r($_POST);
if (isset($_POST['login'])) {
    login();
} else if (isset($_POST['signup'])) {
    signup();
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     include 'Controller/config.php';

//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     // echo $username;
//     $sql = "Select * from users where username='$username' AND password='$password'";
//     // echo $sql;
//     $result = mysqli_query($conn, $sql);
//     // echo $result;
//     $num = mysqli_num_rows($result);
//     // echo $num;
//     if ($num == 1) {
//         // echo "1";
//         session_start();
//         $_SESSION['loggedin'] = true;
//         $_SESSION['username'] = $username;
//         $_SESSION['password'] = $password;
//         header("location: ../view/todo.php");
//     } else {
//         echo "Invalid Credentials";
//         exit;
//     }
// }
