<?php
require('../App/Controllers/Controller.php');
$daftar = new Controller();
if (isset($_POST['submit'])) {
    return $daftar->storePasien();
    // var_dump($data);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran pasien baru</title>
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
    <form action="" method="POST">
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
                <h2 class="tittle-form">INFORMASI PEMERIKSAAN</h2>
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">Debitur</label>
                            <select name="debitur" class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Jenis Pembayaran--</option>
                                <option value="Umum">Umum</option>
                                <option value="BPJS">BPJS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Perawatan</label>
                            <select name="jenis_perawatan" class="form-select" aria-label="Default select example"
                                required>
                                <option selected>--Pilih Perawatan--</option>
                                <option value="Rawat Jalan">Rawat Jalan</option>
                                <option value="Rawat Inap">Rawat Inap</option>
                                <option value="Rawat Darurat">Rawat Gawat Darurat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kunjungan</label>
                            <select name="jenis_kunjungan" class="form-select" aria-label="Default select example"
                                required>
                                <option selected>--Pilih Jenis Kunjungan--</option>
                                <option value="Kunjungan Sehat">Kunjungan Sehat</option>
                                <option value="Kunjungan Sakit">Kunjungan Sakit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Poli</label>
                            <select name="poli" class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Poli Tujuan--</option>
                                <option value="1">Pemeriksaan Umum</option>
                                <option value="2">KIA</option>
                                <option value="3">Poli Gigi</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content3">
                <h2 class="tittle-form">INFORMASI PASIEN</h2>
            </div>
            <div id="content1">

                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input name="nama_pasien" type="text" class="form-control" id=""
                                placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIK (Kosongi Jika Tidak Membawa KTP)</label>
                            <input name="nik" type="number" class="form-control" id="" placeholder="Isi Sesuai KTP">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" placeholder="Tempat Tahir">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Umur</label>
                            <input name="umur" type="text" class="form-control" id="" placeholder="Isi Sesuai KTP"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Jenis Kelamin--</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="column">
                <div class="right">
                    <div class="mb-3">
                        <label for="" class="form-label">Golongan Darah</label>
                        <select name="gol_darah" class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Golongan Darah--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Agama</label>
                        <select name="agama" class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Agama--</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pendidikan</label>
                        <select name="pendidikan" class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Pendidikan--</option>
                            <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                            <option value="TK/PAUD">TK/PAUD</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/K">SMA/K</option>
                            <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status Pernikahan</label>
                        <select name="status_pernikahan" class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Status--</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat </label>
                        <input name="alamat" type="text" class="form-control" id=""
                            placeholder="Jl, RT, RW, Desa, Kec, Kab, Kode Pos" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Ibu Kandung</label>
                        <input name="ibu_kandung" type="text" class="form-control" id="" placeholder="" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="tombol-aksi">
            <input type="submit" name="submit" value="Simpan" class="submit">
            <button type="reset" class="reset"><b>Batal</b></button>
        </div>
    </form>
    <!-- <div class="tombol-aksi">
        <button type="submit" value="submit" class="submit"><b>Simpan</b></button>
    </div> -->
    <script src="../assets/js/sidebar.js"></script>
</body>

</html>