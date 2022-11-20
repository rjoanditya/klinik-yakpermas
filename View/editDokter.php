<?php
require('../App/Controllers/fungsi.php');

$id = $_GET["id"];
$jadwal_dokter = query("SELECT * FROM jadwal_dokter WHERE id = $id")[0];

if(isset($_POST['submit'])) {
    if (edit($_POST)> 0) {
        echo "
        <script>
        alert('berhasil diubah');
        document.location.href = 'dokter.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('gagal diubah');
        document.location.href = 'dokter.php';
        </script>
        ";

    }
}
echo mysqli_error($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi akun</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <img src="../assets/img/icons8-menu-24.png" name="" class="nav__toggle" id="nav-toggle"></img>
                    <a href="#" class="nav__logo"></a>
                </div>

                <div class="nav__list">
                    <div class="nav__link collapse user">
                        <img src="../assets/img/icons8-user-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Nama</span>
                    </div>
                    <a href="dashboard.php" class="nav__link ">
                        <img src="../assets/img/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>

                        <img src="../assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="#" class="collapse__sublink">Pasien Baru</a></span><br>
                            <a href="#" class="collapse__sublink">Pasien Lama</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </div>
                </div>
            </div>
            <a href="" class="nav__link">
                <img src="../assets/img/icons8-logout-24.png" name="" class="nav__icon"></img>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
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
                <h2>Ubah Jadwal Dokter</h2>
            </div>

            <div id="content1">
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Isi Sesuai KTP" required value="<?= $jadwal_dokter["nama_dokter"]?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Poli</label>
                            <input type="text" class="form-control" name="nama" placeholder="Isi Sesuai KTP" required value="<?= $jadwal_dokter["nama_poli"]?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2">
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Jadwal</label>
                            <input name="telp" type="text" class="form-control" placeholder="" required value="<?= $jadwal_dokter["jadwal"]?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Hari</label>
                            <input name="alamat" type="text" class="form-control"
                                placeholder="" required value="<?= $jadwal_dokter["hari"]?>">
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