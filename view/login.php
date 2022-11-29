<?php
require('../App/Controllers/Controller.php');
$login = new Auth();
$table_name = 'lib_user';
if (isset($_POST['submit'])) {
    return $login->storeLogin($table_name);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <table>
                <tr>
                    <td>
                        <img src="../assets/img/logo.png" class="brand" alt="">
                        <img src="../assets/img/design.png" class="design" alt="">
                    </td>
                    <td>
                        <h1>Klinik Yakpermas</h1>
                    </td>
                    <td><button type="" class="nav"><b>Pengaturan</b></button></td>
                    <td><button type="" class="nav"><b>Informasi</b></button></td>
                    <td><button type="" class="submit"><a href="login.php"><b>Masuk</b></a></button></td>
                    <td><button type="" class="link"><a href="daftarakunpetugas.php"><b>Daftar</b></a></button></td>

                </tr>
            </table>
        </div>

    </div>
    <div class="login-box">
        <form action="" method="POST">
            <h2>Masuk Akun Anda</h2>
            <h5>Pastikan username & Password<br> yang anda masukkan benar</h5>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lupa kata sandi ?</label> <br>
                        <button type="submit" name="submit" class="button" value="submit"><b>Masuk</b></button>
                        <p>Belum memiliki akun <a href="daftarakunpetugas.php">daftar disini</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>

</html>