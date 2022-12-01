<?php
require('../App/Controllers/Controller.php');
$post = new Auth();
$table_name = 'lib_user';
if (isset($_POST['submit'])) {
    return $post->storeUser($table_name);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
    <title>Registrasi akun</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body id="body-pd">
<?php include 'sidebar.php'; ?>
    <form action="" method="POST" class="form">
        <div class="container">
            <!-- ============ HEADER START================= -->

            <div class="header">
                <table>
                    <tr>
                        <td>
                            <marquee behavior="" direction="">
                                <h2>Klinik Yakpermas Banyumas</h2>
                            </marquee>
                        </td>
                        <td>
                            <img src="../assets/img/logo.png" alt="logo PYB">

                        </td>
                    </tr>
                </table>
            </div>
            <!-- =============== HEADER END =============== -->
            <!-- =============== TITTLE FORM START ============== -->
            <div class="main">
                <h1>Registrasi Akun Petugas</h1>
            </div>

            <div id="content1">
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Jenis Kelamin--</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                        <input type="hidden" name="role" class="form-control" value="Admin">

                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input name="alamat" type="text" class="form-control"
                                placeholder="Jl, RT, RW, Desa, Kec.,Kab, Kode Pos" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2">
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input name="telp" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control"
                                placeholder="Masukkan 8 karakter" required>
                        </div>
                    </div>
                </div>
                <table>
                    <tr>
                        <td><button type="submit" name="submit" class="submit"><b>Simpan</b></button></td>
                        <td><button type="reset" class="reset"><b>Batal</b></button></td>
                    </tr>
                </table>


            </div>
            <!-- <div class="content3">
            </div> -->
        </div>
    </form>
    <script src="../assets/js/sidebar.js"></script>
</body>

</html>