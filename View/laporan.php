<?php ?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/laporan.css">
</head>
<body>
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
                    <a href="../petugas/dashboard.html" class="nav__link ">
                        <img src="../assets/img/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <div class="nav__link collapse">
                        <img src="../assets/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                        <img src="assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="../petugas/dashboard.html" class="collapse__sublink">Dashboard</a></span><br>
                            <a href="antrian1.html" class="collapse__sublink">Antrian</a>
                            <a href="pendaftaran.html" class="collapse__sublink">Pendaftaran</a>
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dokter</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>

                        <img src="../assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="" class="collapse__sublink">Pasien Baru</a></span><br>
                            <a href="" class="collapse__sublink">Pasien Lama</a>
                        </ul>
                    </div>
                    <a href="Koding.html" class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </a>
                    <a href="pelaporan.html" class="nav__link collapse">
                        <img src="../assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </a>
                </div>
            </div>
            <a href="../petugas/login.html" class="nav__link">
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
            <!-- <div class="content3">
                <h1>Pemeriksaan Pasien</h1>
            </div> -->
            <div class="main">
                <table>
                    <tr>
                        <td>
                            <div class="box">
                                Laporan Kunjungan Sehat
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                Laporan Kunjungan Sakit
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                Laporan Daftar 10 Penyakit 
                            </div>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="content1">                
            </div>
            <div class="content3">
                
            </div>

        </div>
    </form>



    <script src="../assets/js/sidebar.js"></script>
</body>
</html>