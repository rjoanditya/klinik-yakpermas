<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 besar penyakit</title>
    <link rel="stylesheet" href="../assets/css/form1.css">
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
                    <a href="#" class="nav__link ">
                        <img src="../assets/img/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </div>
                    <!-- <div class="nav__link collapse"> -->
                    <a href="../antrian1.html" class="nav__link ">
                        <img src="../assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                    </a>
                    <!-- </div> -->
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>

                        <img src="../assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="../kunjunganPasien.html" class="collapse__sublink">pasien baru</a></span><br>
                            <a href="#" class="collapse__sublink">pasien lama</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>

                        <img src="../assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="#" class="collapse__sublink">10 Diagnosa Terbanyak</a></span><br>
                            <a href="#" class="collapse__sublink">Kunjungan Pasien Sehat</a>
                            <a href="#" class="collapse__sublink">Kunjungan Pasien Sakit</a>
                            <a href="#" class="collapse__sublink">Kunjungan Pasien 1 Bulan</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>

                </div>
            </div>
            <a href="login.html" class="nav__link">
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
            <div class="main">
                <div class="form-box">
                    <h2 class="title-content">Daftar 10 Diagnosa Terbanyak</h2>
                    <input type="text" class="" name="" placeholder="Bulan">
                    <input type="text" class="search" name="" placeholder="Tahun">
                    <table class="button">
                        <tr>
                            <td>
                                <button type="submit" class="submit" name="">Cari</button>
                            </td>
                            <td>
                                <button type="" class="submit" name="">Cetak</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="line"></div>
            </div>
            <div class="content1">
                <table>
                    <tr>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>I10</td>
                        <td>Hypertention</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>E10.9</td>
                        <td>Diabetes Mellitus insulin</td>
                        <td>25</td>
                    </tr>
                </table>
            </div>
        </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>