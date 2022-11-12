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
                    <a href="../petugas/dashboard.html" class="nav__link ">
                        <img src="../assets/img/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <!-- <div class="nav__link collapse">
                        <img src="../assets/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </div> -->
                    <div class="nav__link collapse">
                        <img src="../assets/img/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                        <img src="../assets/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="../petugas/dashboard.html" class="collapse__sublink">Dashboard</a></span><br>
                            <a href="antrian1.html" class="collapse__sublink">Antrian</a>
                            <a href="pendaftaran.html" class="collapse__sublink">Pendaftaran</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
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
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <a href="kodifikasi.html" class="nav__link collapse">
                        <img src="../assets/img/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </a>
                    <a href="pelaporan.html" class="nav__link collapse">
                        <img src="../assets/img/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </a>
                    <!-- <a href="#" class="nav__link">
                        <img src="../assets/icons8-setting-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Settings</span>
                    </a> -->
                </div>
            </div>
            <a href="../petugas/login.html" class="nav__link">
                <img src="../assets/img/icons8-logout-24.png" name="" class="nav__icon"></img>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <form action="pendaftaran.html" method="" class="form">
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
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Jenis Pembayaran--</option>
                                <option value="">Umum</option>
                                <option value="">BPJS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Perawatan</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Perawatan--</option>
                                <option value="">Rawat Jalan</option>
                                <option value="">Rawat Inap</option>
                                <option value="">Rawat Gawat Darurat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kunjungan</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Jenis Kunjungan--</option>
                                <option value="">Kunjungan Sehat</option>
                                <option value="">Kunjungan Sakit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Poli</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected>--Pilih Poli Tujuan--</option>
                                <option value="">Pemeriksaan Umum</option>
                                <option value="">Poli Gigi</option>
                                <option value="">KIA</option>
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
                            <input type="text" class="form-control" id="" placeholder="Isi Sesuai KTP" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">NIK (Kosongi Jika Tidak Membawa KTP)</label>
                            <input type="text" class="form-control" id="" placeholder="Isi Sesuai KTP">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" placeholder="Tempat Tahir">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="" placeholder="Isi Sesuai KTP" required>
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
            </div>
            <div class="column">
                <div class="right">
                    <div class="mb-3">
                        <label for="" class="form-label">Golongan Darah</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Golongan Darah--</option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">O</option>
                            <option value="">AB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Agama</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Agama--</option>
                            <option value="">Islam</option>
                            <option value="">Katolik</option>
                            <option value="">Protestan</option>
                            <option value="">Hindu</option>
                            <option value="">Budha</option>
                            <option value="">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pendidikan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Pendidikan--</option>
                            <option value="">Tidak/Belum Sekolah</option>
                            <option value="">TK/PAUD</option>
                            <option value="">SD</option>
                            <option value="">SMP</option>
                            <option value="">SMA/K</option>
                            <option value="">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status Pernikahan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Status--</option>
                            <option value="">Sudah Menikah</option>
                            <option value="">Belum Menikah</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat </label>
                        <input type="text" class="form-control" id="" placeholder="Jl, RT, RW, Desa, Kec, Kab, Kode Pos" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Ibu Kandung</label>
                        <input type="text" class="form-control" id="" placeholder="" required>
                    </div>

                </div>

            </div>
        </div>

        <div class="tombol-aksi">
            <button type="submit" class="submit"><b>Simpan</b></button>
            <button type="reset" class="reset"><b>Batal</b></button>
        </div>
    </form>

















    <script src="../assets/js/sidebar.js"></script>
</body>

</html>