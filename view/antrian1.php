<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian</title>
    <link rel="stylesheet" href="assets/css/antrian1.css">
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <img src="assets/img/icons8-menu-24 (1).png" name="" class="nav__toggle" id="nav-toggle"></img>
                    <a href="#" class="nav__logo"></a>
                </div>

                <div class="nav__list">
                    <div class="nav__link collapse user">
                        <img src="assets/img/icons8-user-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Nama</span>
                    </div>
                    <a href="../petugas/dashboard.html" class="nav__link ">
                        <img src="assets/img/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <!-- <div class="nav__link collapse">
                        <img src="assets/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </div> -->
                    <div class="nav__link collapse">
                        <img src="assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                        <img src="assets/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="../petugas/dashboard.html" class="collapse__sublink">Dashboard</a></span><br>
                            <a href="#" class="collapse__sublink">Antrian</a>
                            <a href="pendaftaran.html" class="collapse__sublink">Pendaftaran</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dokter</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>

                        <img src="assets/img/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="" class="collapse__sublink">Pasien Baru</a></span><br>
                            <a href="" class="collapse__sublink">Pasien Lama</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <a href="Koding.html" class="nav__link collapse">
                        <img src="assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </a>
                    <a href="pelaporan.html" class="nav__link collapse">
                        <img src="assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </a>
                    <!-- <a href="#" class="nav__link">
                        <img src="assets/icons8-setting-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Settings</span>
                    </a> -->
                </div>
            </div>
            <a href="../petugas/login.html" class="nav__link">
                <img src="assets/img/icons8-logout-24.png" name="" class="nav__icon"></img>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
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
                        <img src="assets/img/logo.png" alt="logo PYB">

                    </td>
                </tr>
            </table>
        </div>
        <!-- =============== HEADER END =============== -->
        <!-- =============== content start ============= -->
        <form action="" method="post">
            <div class="main">
                <h1>Antrian</h1>

            </div>
            <div class="content1">
                <table class="tombol">
                    <tr>
                        <td>
                            <button class="tombol-antrian" name="">
                                <!-- <img src="" alt=""> -->
                                <a href="pendaftaran.html">Pendaftaran Langsung</a>
                            </button>
                        </td>
                        <td>
                            <button class="tombol-antrian" name="">
                                Ambil Antrian
                            </button>
                        </td>
                    </tr>
                </table>
                <h1>LOKET PENDAFTARAN 1</h1>
                <div class="data-pasien">
                    <table class="data-pasien">
                        <tr>
                            <th colspan="2">Menu Antrian</th>
                            <th>Antrian Dilayani</th>
                            <th>Sisa Antrian</th>
                            <th>Total Antrian</th>
                        </tr>
                        <tr>
                            <td>
                                <button class="aksi">
                                    Ulangi Antrian Berjalan
                                </button>
                            </td>
                            <td>
                                <button class="aksi">
                                    Panggil Antrian Baru
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <table class="daftar-pasien">
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Antrian</th>
                        <th>Poli</th>
                        <th>Status Panggil</th>
                        <th>Loket</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="text" name="" placeholder="Cari Nama">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Antrian">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Poli">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Status Panggil">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Loket">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="pendaftaran.html" class="aksi">
                                Daftar
                            </a>
                        </td>
                        <td>Jerry</td>
                        <td>001</td>
                        <td>Umum</td>
                        <td>-</td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
        </form>
        <div class="content2">
        </div>
    </div>


    <script src="assets/js/sidebar.js"></script>
</body>

</html>