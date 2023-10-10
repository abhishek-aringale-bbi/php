<?php

require_once '../controller/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Controller/config.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
    echo $password;
    $sql = "Select * from users where username='$username'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    echo $result;
    $num = mysqli_num_rows($result);
    echo $num;
    // if ($num == 1) {
    //     echo "12";
    //     $updatePass = "UPDATE users SET `password`=$password where `username` = '$username'";
    //     session_start();
    //     $_SESSION['loggedin'] = true;
    //     $_SESSION['username'] = $username;
    //     header("location: login.php");
    // } else {
    //     echo "Invalid Credentials";
    // }
    // if ($num == 1) {
    //     // while($row=mysqli_fetch_assoc($result)){
    //     echo "22";
    //     $updatePass = "UPDATE users SET `password`=$password where `username` = '$username'";
    //     $result1 = mysqli_query($conn, $updatePass);
    // } else {
    //     echo "Invalid Credentials";
    // }

}
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
      <h1 class="text-center">Forget Password</h1>
    <div class="container ">
     <form action="forgotpass.php" method="post" id="form">
        <div class="box">
            <label for="username">UserName:</label>
            <input type="text" name="username" id="" require>
        </div>
        <div class="box">
            <label for="password">Enter New Password:</label>
            <input type="text" name="password" id="" require>
        </div>
        <div class="box">
            <button id="confirm" type="submit">Confirm</button>
        </div>
     </form>

  </body>
</html>
