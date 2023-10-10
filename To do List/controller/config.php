<?php
$db_host = 'localhost';
$db_user = 'abhi';
$db_pass = '';
$db_name = 'temp';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
echo $conn;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection ok";
}
