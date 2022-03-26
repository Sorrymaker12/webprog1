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
    <div class="log-content">
        <div class="log-title">
            <p>Login Error : </p>
        </div>
        <div class="log-captions">
            <?php
            session_start();

            if (isset($_POST["submit"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
                $good = true;
                if ($_POST["login-user"] == $_SESSION["username"]) {
                    if ($_POST["login-pass"] == $_SESSION["password"]) {
                    } else {
                        echo '<p class="fail-msg">Invalid Password</p><br>';
                        $good = false;
                    }
                } else {
                    echo '<p class="fail-msg">Invalid Username</p><br>';
                    $good = false;
                }


                if ($good) {
                    header("Location: ./home.php");
                } else {
                    echo '<a class="ret-btn" href="login.php">Retry</a>';
                }
            } else {
                echo '<p class="fail-msg">Username and Password not set</p><br>';
                echo '<a class="reg-btn" href="register.php">Register</a>';
            }

            ?>
        </div>
    </div>
</body>

</html>