<?php
include('../App/Controllers/Controller.php');
$user = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat</title>
    <link rel="stylesheet" href="../assets/css/index.css">
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
                    <a href="obat.php" class="nav__link ">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Antrian Obat Pasien</span>
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
            <?php
            $id = $_GET["id"];
            $allPasien = mysqli_query($user->conn, "SELECT pendaftaran_poli.id_pendaftaran, lib_pasien.nama_pasien, lib_obat.nama_obat, diagnosis.jumlah_obat, lib_obat.harga_satuan, lib_poli.nama_poli FROM diagnosis INNER JOIN pendaftaran_poli ON pendaftaran_poli.id_pendaftaran = diagnosis.id_pendaftaran INNER JOIN lib_pasien ON pendaftaran_poli.id_pasien = lib_pasien.id_pasien INNER JOIN lib_poli ON pendaftaran_poli.id_poli = lib_poli.id_poli INNER JOIN lib_obat ON diagnosis.id_obat = lib_obat.id_obat WHERE pendaftaran_poli.id_pendaftaran = $id");
            $Pasien = mysqli_fetch_assoc($allPasien);
            ?>
            
            <div class="main">
                <h2>OBAT</h2>
                <h3><?= $Pasien['nama_pasien']; ?></h3>  
            </div>
            <div class="content1">
                <table class="Obat">
                  <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><?= $Pasien['nama_obat']; ?></td>
                        <td><?= $Pasien['jumlah_obat']; ?></td>
                        <td><?= $Pasien['harga_satuan']; ?></td>
                        <td><?= $Pasien['jumlah_obat']*$Pasien['harga_satuan']; ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
    <div class="aksi">
        <button>Pembayaran</button >
        <button class="button">Batal</button >
        </div>
        </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>
</html>