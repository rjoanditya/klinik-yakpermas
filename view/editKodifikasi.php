<?php
require('../App/Controllers/Controller.php');
$user = new Database();
$post = new Auth();
$table_name = 'kodifikasi';
if (isset($_POST['submit'])) {
    return $post->storeKodifikasi($table_name);
}


?>
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
                    <a href="kunjunganPasien.php" class="nav__link ">
                        <img src="../assets/img/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </a>
                    <a href="../antrian1.html" class="nav__link ">
                        <img src="../assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                    </a>

                    <a href="pemeriksaan.php" class="nav__link ">
                        <img src="../assets/img/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>
                    </a>
                    <a href="kodifikasi.php" class="nav__link ">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </a>
                    <a href="pelaporan.php" class="nav__link ">
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
            <!-- main section -->
            <?php
            $id = $_GET["id"];
            $allPasien = mysqli_query($user->conn, "SELECT pendaftaran_poli.id_pendaftaran, diagnosis.id_diagnosis, kodifikasi.id_kodifikasi, lib_poli.nama_poli, lib_pasien.no_rm, lib_pasien.nik, lib_pasien.nama_pasien, lib_pasien.tgl_lahir, lib_pasien.alamat, lib_pasien.jenis_kelamin, diagnosis.diagnosis_utama, kodifikasi.icd10_utama, diagnosis.diagnosis_sekunder, kodifikasi.icd10_sekunder, diagnosis.tindakan, kodifikasi.icd9 FROM pendaftaran_poli INNER JOIN lib_pasien ON pendaftaran_poli.id_pasien = lib_pasien.id_pasien INNER JOIN diagnosis ON pendaftaran_poli.id_pendaftaran = diagnosis.id_pendaftaran INNER JOIN lib_poli ON pendaftaran_poli.id_poli = lib_poli.id_poli LEFT JOIN 	kodifikasi ON pendaftaran_poli.id_pendaftaran = kodifikasi.id_pendaftaran WHERE pendaftaran_poli.id_pendaftaran = $id");
            $Pasien = mysqli_fetch_assoc($allPasien);
            ?>
            <div class="main">
                <h2>IDENTITAS PASIEN</h2>
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                        <input hidden type="text" name="id_pendaftaran" class="form-control" value="<?= $Pasien['id_pendaftaran']; ?>">
                        <input hidden type="text" name="id_kodifikasi" class="form-control" value="<?= $Pasien['id_kodifikasi']; ?>">
                        <input hidden type="text" name="id_diagnosis" class="form-control" value="<?= $Pasien['id_diagnosis']; ?>">
                            <label for="" class="form-label">No.RM</label>
                            <input type="text" class="form-control" id="" name="no_rm" placeholder="<?= $Pasien['no_rm']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="" name="nik" placeholder="Isi Sesuai KTP" value="<?= $Pasien['nik']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="" name="nama_pasien" placeholder="Isi Sesuai KTP" value="<?= $Pasien['nama_pasien']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="" name="tgl_lahir" placeholder="Isi Sesuai KTP" value="<?= $Pasien['tgl_lahir']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="" name="alamat"
                                placeholder="Jl, RT, RW, Desa, Kec.,Kab, Kode Pos" value="<?= $Pasien['alamat']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected><?= $Pasien['jenis_kelamin']; ?></option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Diagnosa Utama</label>
                            <input name="diagnosis_utama" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['diagnosis_utama']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-10 Diagnosa Utama</label>
                            <input name="icd10_utama" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['icd10_utama']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Diagnosa Sekunder</label>
                            <input name="diagnosis_sekunder" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['diagnosis_sekunder']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-10 Diagnosa Sekunder</label>
                            <input name="icd10_sekunder" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['icd10_sekunder']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tindakan</label>
                            <input name="tindakan" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['tindakan']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kode ICD-9</label>
                            <input name="icd9" type="text" class="form-control" id="" placeholder="" value="<?= $Pasien['icd9']; ?>" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit" name="submit"><b>Simpan</b></button>
                <button type="reset" name="reset" class="reset" name=""><b>Batal</b></button>
            </div>
            <div class="content1">

            </div>

        </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>
</html>