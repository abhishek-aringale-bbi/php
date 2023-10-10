<?php
include '../controller/config.php';
session_start();
$username = $_SESSION['username'];
echo $username;
$password = $_SESSION['password'];
$sql = "Select * from users where username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;
if ($num == 1) {
    $sql1 = "Select tasks from usersTasks where username='$username' AND password='$password'";
    $result1 = mysqli_query($conn, $sql1);
    $num1 = mysqli_num_rows($result1);
    echo $num1;
    // $row = mysql_fetch_assoc($result1);
    // $temp = array();
    // $temp[] = $row;

    // echo json_decode($temp);
}
// else{
//     $sql2="INSERT INTO `usersTasks` (`username`, `password`, `tasks`)
//     VALUES ('$username', '$password', '{}');"
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="todo.css">
</head>
<body>
    <h1>My Todos</h1>
    <div class="container">
        <div class="add">
            <input type="text" name="" id="todo">
            &nbsp;&nbsp;
            <button id="save">save</button>
        </div>

        <div class="info">
            <ul id="taskcontainer">

            </ul>
        </div>
    </div>
    <form action="logout.php">
        <button type="submit">Logout</button>
    </form>
    <script src="todo.js"></script>
</body>
</html>
