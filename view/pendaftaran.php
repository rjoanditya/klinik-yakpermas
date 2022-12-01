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
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="../assets/css/antrian.css">
</head>

<body id="body-pd">
<?php include 'sidebar.php'; ?>
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
            <h1>Pendaftaran</h1>

        </div>
        <div class="content1">
            <table class="tombol">
                <tr>
                    <td>
                        <button class="tombol-antrian">
                            <!-- <img src="" alt=""> -->
                            <a href="formPendaftaranPasienBaru.php">Tambah Pasien Baru</a>
                        </button>
                    </td>
                    <td>
                        <!-- <button class="tombol-antrian"> -->
                        <!-- <img src="" alt=""> -->
                        <!-- <a href="">Form Ambil Antrian</a>
                        </button> -->
                    </td>
                </tr>
            </table>
            <h1>LOKET PENDAFTARAN 1</h1>
            <div class="data-pasien">
                <table class="data-pasien">
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>NIK</th>
                        <th class="nama">Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>

                        <td>
                            <input type="text" name="" placeholder="Cari NIK">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Nama">
                        </td>
                        <td>
                            <input type="text" name="" id="" placeholder="Cari Jenis Kelamin">
                        </td>
                        <td>
                            <input type="text" name="" placeholder="Cari Tanggal Lahir">
                        </td>
                    </tr>
                    <?php foreach ($user->getPasien() as $pasien) : ?>
                    <tr>
                        <td>1</td>
                        <td>
                            <button class="aksi">
                                <a href="#bg-modal" id="button">Daftar</a>
                            </button>
                        </td>
                        <td><?= $pasien['nik']; ?></td>
                        <td>
                            <?= $pasien['nama_pasien']; ?>
                        </td>
                        <td><?= $pasien['jenis_kelamin']; ?></td>
                        <td><?= $pasien['tgl_lahir']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <!-- modal pop up -->
        <div class="bg-modal" id="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <p>DAFTAR POLI</p>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="No Rekam Medis">
                    <select name="poli" aria-label="Default select example" value="$poli">
                        <option selected>Poli</option>
                        <option value="UMUM">UMUM</option>
                        <option value="KIA">KIA</option>
                    </select>
                    <!-- <input type="text" name="" id="noAntri" placeholder="Nomor Antrian"> -->
                    <input type="datetime-local" name="" id="waktuKunjungan" placeholder="Waktu Kunjungan">
                    <a href="kunjunganPasien.php" class="button" name="">Submit</a>
                    <button type="reset">Batal</button>
                </form>
            </div>
        </div>
        <!-- end -->
    </div>


    <script src="../assets/js/sidebar.js"></script>
</body>

</html>