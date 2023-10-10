<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="login.css">
</head>
<body>




    <h1>SignUp</h1>
    <div class="container">
    <form action="../controller/login_signup_process.php" method="post" id="form">
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
        <input type="text" name="signup" id="" style="display:none">
        <p>alredy a user?
        <a href="login.php">click here to Login</a>
        </p>
    </form>
    </div>
</body>
</html>
