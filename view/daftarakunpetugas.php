<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/login.css"> -->
    <title>Registrasi akun</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <img src="assets/icons8-menu-24 (1).png" name="" class="nav__toggle" id="nav-toggle"></img>
                    <a href="#" class="nav__logo"></a>
                </div>

                <div class="nav__list">
                    <div class="nav__link collapse user">
                        <img src="assets/icons8-user-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Nama</span>
                    </div>
                    <a href="dashboard.html" class="nav__link ">
                        <img src="assets/icons8-home-page-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <div class="nav__link collapse">
                        <img src="assets/icons8-health-book-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pasien</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/icons8-id-card-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pendaftaran</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/icons8-treatment-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pemeriksaan</span>

                        <img src="assets/icons8-expand-arrow-24 (1).png" name="" class="collapse__link"></img>

                        <ul class="collapse__menu">
                            <span><a href="#" class="collapse__sublink">Pasien Baru</a></span><br>
                            <a href="#" class="collapse__sublink">Pasien Lama</a>
                            <!-- <a href="#" class="collapse__sublink">Members</a> -->
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/icons8-file-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Koding</span>
                    </div>
                    <div class="nav__link collapse">
                        <img src="assets/icons8-folder-24 (1).png" name="" class="nav__icon"></img>
                        <span class="nav__name">Pelaporan</span>
                    </div>
                    <!-- <a href="#" class="nav__link">
                        <img src="assets/icons8-setting-24.png" name="" class="nav__icon"></img>
                        <span class="nav__name">Settings</span>
                    </a> -->
                </div>
            </div>
            <a href="login.html" class="nav__link">
                <img src="assets/icons8-logout-24.png" name="" class="nav__icon"></img>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <form action="login.html" method="" class="form">
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
                            <img src="assets/logo.png" alt="logo PYB">

                        </td>
                    </tr>
                </table>
            </div>
            <!-- =============== HEADER END =============== -->
            <!-- =============== TITTLE FORM START ============== -->
            <div class="main">
                <h2>Registrasi Akun Petugas</h2>
            </div>
            <div id="content1">
                <div class="column">
                    <div class="left">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
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
                        <div class="mb-3">
                            <label for="" class="form-label">Sebagai</label>
                            <input type="text" class="form-control" id="" placeholder="Sebagai">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id=""
                                placeholder="Jl, RT, RW, Desa, Kec.,Kab, Kode Pos" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2">
                <div class="column">
                    <div class="right">
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="text" class="form-control" id="" placeholder="Masukkan 8 karakter" required>
                        </div>
                    </div>
                </div>
                <table>
                    <tr>
                        <td><button type="submit" class="submit"><b>Simpan</b></button></td>
                        <td><button type="reset" class="reset"><b>Batal</b></button></td>
                    </tr>
                </table>


            </div>
            <!-- <div class="content3">
            </div> -->
        </div>
    </form>

















    <script src="assets/js/sidebar.js"></script>
</body>

</html>