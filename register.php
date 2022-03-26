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
    <title>Register</title>
</head>

<body>
    <div class="regis-content">
        <div class="regis-title">
            <p>REGISTER</p>
        </div>
        <form class="regis-form" action="reg.php" enctype="multipart/form-data" method="POST" required>
            <div class="form-input">
                <div class="form-caption">Nama Depan</div>
                <input type="text" name="nama-depan" id="nama-depan" placeholder="Nama Depan" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Nama Tengah</div>
                <input type="text" name="nama-tengah" id="nama-tengah" placeholder="Nama Tengah" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Nama Belakang</div>
                <input type="text" name="nama-belakang" id="nama-belakang" placeholder="Nama Belakang" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Tempat Lahir</div>
                <input type="text" name="tempat-lahir" id="tempat-lahir" placeholder="Tempat Lahir" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Tanggal Lahir</div>
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" placeholder="Tanggal Lahir" required>
            </div>
            <div class="form-input">
                <div class="form-caption">NIK</div>
                <input type="number" name="nik" id="nik" placeholder="NIK" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Warga Negara</div>
                <input type="text" name="warga-negara" id="warga-negara" placeholder="Warga Negara" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Email</div>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-input">
                <div class="form-caption">No HP</div>
                <input type="number" name="nomor-hp" id="nomor-hp" placeholder="Nomor HP" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Alamat</div>
                <input type="textarea" name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Kode Pos</div>
                <input type="number" name="kode-pos" id="kode-pos" placeholder="Kode Pos" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Foto Profil</div>
                <input type="file" name="foto-profil" id="foto-profil" placeholder="Foto Profil" accept="image/png, image/jpeg" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Username</div>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Password</div>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-input">
                <div class="form-caption">Confirm Password</div>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
            </div>
            <input class="submit-button" type="submit" value="Submit" name="submit">
            <a class="return-button" class="form-kembali" href="./welcome.php">Kembali</a>
        </form>
    </div>
</body>

</html>