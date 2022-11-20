<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="../assets/css/pembayaran.css">
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
                        <img src="../assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                        <img src="../assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="dashboard.php" class="collapse__sublink">Dashboard</a></span><br>
                            <a href="antrian1.php" class="collapse__sublink">Antrian</a>
                            <a href="pendaftaran.php" class="collapse__sublink">Pendaftaran</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <div class="collapse">
                    <a href="dokter.php" class="nav__link ">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dokter</span>
                    </a>
                    </div>
                    <a href="pemeriksaan.php" class="nav__link ">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>
                    <a href="kodifikasi.php" class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Kodifikasi</span>
                    </a>
                    <a href="pelaporan.php" class="nav__link collapse">
                        <img src="../assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </a>
                    <!-- <a href="#" class="nav__link">
                        <img src="../assets/icons8-setting-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Settings</span>
                    </a> -->
                </div>
            </div>
            <a href="login.php" class="nav__link">
                <img src="../assets/img/icons8-logout-24.png" name="" class="nav__icon"></img>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <form action="" method="post" class="form">
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
            <!-- main section -->
            <div class="hero">
                <div class="form-box">
                    <p>KLINIK YAKPERMAS<br>
                        Jl. Raya Jompo Kulon Sokaraja, Banyumas, jawa Tengah 53181 <br>
                        Telp : (0281)6596816 Email : info@politeknikyakpermas.ac.id</p>
                    <h2>KWITANSI</h2>
                    <form action="" method="" class="input-group">
                        <label for="No.kwitansi">No Kwitansi</label>
                        <input type="text" class="input-field" name="No.kwitansi" placeholder=""><br>
                        <label for="diterima">Telah Diterima Dari</label>
                        <input type="text" class="input-field" name="diterima" placeholder=""><br>
                        <label for="uangsebanyak">Uang Sebanyak</label>
                        <input type="text" class="input-field" name="uangsebanyak" placeholder=""><br>
                        <label for="untukpembayaran">Untuk Pembayaran
                        </label>
                        <input type="text" class="input-field" name="untukpembayaran" placeholder=""><br>



                        <div class="ttd">
                            <table>
                                <br>
                                <br>
                                <br>
                                <br>
                                <tr>
                                    <td class="ttd-pasien">
                                        (......................................) <br>
                                        Pasien/Keluarga Pasien
                                    </td>
                                    <td class="ttd-admin">
                                        (......................................) <br>
                                        Adm.Keuangan
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <button class="btn"><a href="#">Cetak</a></button>
                    </form>
                </div>
            </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>