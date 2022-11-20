<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Pasien</title>
    <link rel="stylesheet" href="../assets/css/antrian.css">
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
                    <a href="dokter.php" class="nav__link ">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dokter</span>
                    </a>
                    <a href="pemeriksaan.php" class="nav__link ">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>
                    </a>
                    <a href="kodifikasi.php" class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Kodifikasi</span>
                    </a>
                    <a href="pelaporan.php" class="nav__link collapse">
                        <img src="../assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </a>
                </div>
            </div>
            <a href="login.php" class="nav__link">
                <img src="../assets/img/icons8-logout-24.png" name="" class="nav__icon"></img>
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
                        <img src="../assets/img/logo.png" alt="logo PYB">

                    </td>
                </tr>
            </table>
        </div>
        <!-- =============== HEADER END =============== -->
        <!-- =============== content start ============= -->
        <div class="main">
        </div>
        <div class="content1">
            <h1>List Pemeriksaan</h1>
            <div class="data-pasien">
                <table class="data-pasien">
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>No RM</th>
                        <th>NIK</th>
                        <th class="nama">Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Poli</th>
                        <th>Tanggal Pemeriksaan</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <button class="aksi">
                                <a href="pemeriksaan.php">Periksa</a>
                            </button>
                        </td>
                        <td>000120</td>
                        <td>3301987654631234</td>
                        <td>Jefri Nichol</td>
                        <td>Laki-Laki</td>
                        <td>1998-01-01</td>
                        <td>Purbalingga</td>
                        <td>Umum</td>
                        <td>19-10-2022 19:00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <button class="aksi">
                                Daftar
                            </button>
                        </td>
                        <td>000121</td>
                        <td>330198765469876</td>
                        <td>Iqbaal Diafakhri Ramadhan</td>
                        <td>Laki-Laki</td>
                        <td>1998-01-01</td>
                        <td>Purbalingga</td>
                        <td>Umum</td>
                        <td>19-10-2022 19:00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>