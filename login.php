<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body>
    <div class="login-content">
        <div class="login-title">
            <p>Login</p>
        </div>
        <form class="login-form" action="log.php" enctype="multipart/form-data" method="POST" required>
            <div class="login-form-input">
                <p class="login-caption"> Username : </p>
                <input type="text" name="login-user" id="login-user" placeholder="Username" required>
            </div>
            <div class="login-form-input">
                <p class="login-caption"> Password : </p>
                <input type="password" name="login-pass" id="login-pass" placeholder="Password" required>
            </div>
            <input class="login-btn" type="submit" value="Login" name="submit"> <br>
            <div class="ret-ctr">
                <a class="ret-btn" href="./welcome.php">Return</a>
            </div>
        </form>
    </div>
</body>

</html>