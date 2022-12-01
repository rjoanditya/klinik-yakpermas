<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian</title>
    <link rel="stylesheet" href="../assets/css/antrian1.css">
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
                <h1>Antrian</h1>

            </div>
            <div class="content1">
                <table class="tombol">
                    <tr>
                        <td>
                            <button class="tombol-antrian" name="">
                                <!-- <img src="" alt=""> -->
                                <a href="pendaftaran.php">Pendaftaran Langsung</a>
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
            <form action="" method="">
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
                            <a href="pendaftaran.php" class="aksi">
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
            </form>
            </div>
        <div class="content2">
        </div>
    </div>


    <script src="../assets/js/sidebar.js"></script>
</body>

</html>