<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodifikasi</title>
    <link rel="stylesheet" href="../assets/css/formPendaftaran.css">
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <img src="../assets/img/icons8-menu-24 (1).png" name="" class="nav__toggle" id="nav-toggle"></img>
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
                            <span><a href="kunjunganPasien.php" class="collapse__sublink">pasien baru</a></span><br>
                            <a href="#" class="collapse__sublink">pasien lama</a>
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
                    <!-- <a href="#" class="nav__link">
                        <img src="assets/icons8-setting-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Settings</span>
                    </a> -->
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
                <h2>IDENTITAS PASIEN</h2>
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">No.RM</label>
                            <input type="text" class="form-control" id="" name="" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="" name="" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="" name="" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="" name="" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="" name=""
                                placeholder="Jl, RT, RW, Desa, Kec.,Kab, Kode Pos" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Jenis Kelamin--</option>
                                <option value="">Perempuan</option>
                                <option value="">Laki-Laki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Diagnosa Utama</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-10 Diagnosa Utama</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Diagnosa Sekunder</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-10 Diagnosa Sekunder</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tindakan</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-9</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit" name=""><b>Simpan</b></button>
                <button type="reset" class="reset" name=""><b>Batal</b></button>
            </div>
            <div class="content1">

            </div>

        </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>
</html>