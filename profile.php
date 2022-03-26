<?php
session_start();
?>

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
    <title>Profile</title>
</head>
<div class="profile-content">
    <div class="navbar">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <a href="./home.php">Home</a>
        <a href="./profile.php">Profile</a>
        <a href="./logout.php">Logout</a>
    </div>
    <div class="profile-details">
        <h2>Profil Pribadi</h2>
        <div class="profile-details-indi">
            <p>Nama Depan : <strong> <?php echo $_SESSION["nama-depan"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Nama Tengah : <strong> <?php echo $_SESSION["nama-tengah"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Nama Belakang : <strong> <?php echo $_SESSION["nama-belakang"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Tempat Lahir : <strong> <?php echo $_SESSION["tempat-lahir"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Tanggal Lahir : <strong> <?php echo $_SESSION["tanggal-lahir"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>NIK : <strong> <?php echo $_SESSION["nik"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Warga Negara : <strong> <?php echo $_SESSION["warga-negara"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Email : <strong> <?php echo $_SESSION["email"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Nomor Handphone : <strong> <?php echo $_SESSION["nomor-hp"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Alamat : <strong> <?php echo $_SESSION["alamat"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Kode Pos : <strong> <?php echo $_SESSION["kode-pos"]; ?> </strong> </p>
        </div>
        <div class="profile-details-indi">
            <p>Foto Profil : </p>
            <img src="./uploads/<?php echo $_SESSION["foto-profil"]; ?>" alt="">
        </div>
    </div>
</div>

<body>

</body>

</html>