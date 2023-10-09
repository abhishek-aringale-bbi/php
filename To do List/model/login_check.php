<?php

require_once '../controller/config.php'; // Include the database connection

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verify the entered password against the stored hashed password
        if (password_verify($password, $user['password'])) {
            // Password is correct, create a session for the user
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect the user to the home page or wherever you want
            header("Location: home.php");
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Username not found in the database
        echo "Username not found. Please sign up.";
    }

}
// Close the database connection
$conn->close();
?>