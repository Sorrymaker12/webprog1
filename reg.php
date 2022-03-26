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
    <title>Document</title>
</head>

<body>
    <div class="regis-res-content">
        <div class="regis-title">
            <p>REGISTER</p>
        </div>
        <div class="regis-res">
            <?php

            session_start();

            if (isset($_POST['submit'])) {
                $good = true;

                // Nama Depan Verification 
                if ($_POST["nama-depan"]) {
                    $namadepan = $_POST["nama-depan"];
                    $_SESSION["nama-depan"] = $namadepan;
                } else {
                    echo '<p class="fail-msg">Invalid Nama Depan</p><br>';
                    $good = false;
                }

                // Nama Tengah Verification 
                if ($_POST["nama-tengah"]) {
                    $namatengah = $_POST["nama-tengah"];
                    $_SESSION["nama-tengah"] = $namatengah;
                } else {
                    echo '<p class="fail-msg">Invalid Nama Tengah</p><br>';
                    $good = false;
                }

                // Nama Belakang Verification 
                if ($_POST["nama-belakang"]) {
                    $namabelakang = $_POST["nama-belakang"];
                    $_SESSION["nama-belakang"] = $namabelakang;
                } else {
                    echo '<p class="fail-msg">Invalid Nama Belakang</p><br>';
                    $good = false;
                }

                // Tempat Lahir Verification 
                if ($_POST["tempat-lahir"]) {
                    $tempatlahir = $_POST["tempat-lahir"];
                    $_SESSION["tempat-lahir"] = $tempatlahir;
                } else {
                    echo '<p class="fail-msg">Invalid Tempat Lahir</p><br>';
                    $good = false;
                }

                // Tanggal Lahir Verification 
                if ($_POST["tanggal-lahir"]) {
                    $tanggallahir = $_POST["tanggal-lahir"];
                    $_SESSION["tanggal-lahir"] = $tanggallahir;
                } else {
                    echo '<p class="fail-msg">Invalid Tanggal Lahir</p><br>';
                    $good = false;
                }

                // NIK Verification 
                if ($_POST["nik"] && strlen($_POST["nik"]) == 16) {
                    $nik = $_POST["nik"];
                    $_SESSION["nik"] = $nik;
                } else {
                    echo '<p class="fail-msg">NIK must be 16 characters long</p><br>';
                    $good = false;
                }

                // warga negara Verification 
                if ($_POST["warga-negara"]) {
                    $warganegara = $_POST["warga-negara"];
                    $_SESSION["warga-negara"] = $warganegara;
                } else {
                    echo '<p class="fail-msg">Invalid Kewarganegaraan</p><br>';
                    $good = false;
                }

                // Email Verification 
                if ($_POST["email"]) {
                    $email = $_POST["email"];
                    $_SESSION["email"] = $email;
                } else {
                    echo '<p class="fail-msg">Invalid Email</p><br>';
                    $good = false;
                }

                // Nomor HP Verification 
                if ($_POST["nomor-hp"] && strlen($_POST["nomor-hp"]) == 12) {
                    $nomorhp = $_POST["nomor-hp"];
                    $_SESSION["nomor-hp"] = $nomorhp;
                } else {
                    echo '<p class="fail-msg">Nomor HP must be 12 characters long</p><br>';
                    $good = false;
                }

                // Alamat Verification 
                if ($_POST["alamat"]) {
                    $alamat = $_POST["alamat"];
                    $_SESSION["alamat"] = $alamat;
                } else {
                    echo '<p class="fail-msg">Invalid Alamat</p><br>';
                    $good = false;
                }

                // Kode Pos Verification 
                if ($_POST["kode-pos"] && strlen($_POST["kode-pos"]) == 5) {
                    $kodepos = $_POST["kode-pos"];
                    $_SESSION["kode-pos"] = $kodepos;
                } else {
                    echo '<p class="fail-msg">Kode Pos must be 5 characters long</p><br>';
                    $good = false;
                }

                // Username Verification
                if ($_POST["username"]) {
                    $username = $_POST["username"];
                    $_SESSION["username"] = $username;
                } else {
                    echo '<p class="fail-msg">Invalid Username</p><br>';
                    $good = false;
                }

                // Password Verification 
                if ($_POST["password"] && $_POST["confirm-password"] && $_POST["password"] == $_POST["confirm-password"]) {
                    $password = $_POST["password"];
                    $_SESSION["password"] = $password;
                } else {
                    echo '<p class="fail-msg">Password must be the same as Confirm Password</p><br>';
                    $good = false;
                }

                // User's Profile Picture Verification
                $filename = $_FILES['foto-profil']['name'];
                $tmpname = $_FILES['foto-profil']['tmp_name'];

                $uploaddir = "./uploads/";

                $upload = move_uploaded_file($tmpname, $uploaddir . $filename);
                $_SESSION["foto-profil"] = $filename;

                if ($upload) {
                } else {
                    echo '<p class="fail-msg">Upload Failed</p><br>';
                    $good = false;
                }

                if ($good) {
                    echo '<p class="succ-msg">Registration Successful</p><br><br><br>';
                    echo '<a class="lgn-btn" href="login.php">Login</a>';
                } else {
                    echo '<p class="fail-msg"><strong>Failed To Register</strong></p><br><br><br>';
                    echo '<a class="reg-btn" href="register.php">Return</a>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>