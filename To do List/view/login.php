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
        <form action="../controller/login_signup_process.php" id="form" method="post" >
            <div class="box">
                <label for="username">UserName:</label>
                <input type="text" name="username" id="" require>
            </div>

            <div class="box">
            <label for="password">Password:</label>
            <input type="text" name="password" id="" require>
            </div>

            <div class="box">

                <input type="text" name="login" id="" style="display:none" >
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
