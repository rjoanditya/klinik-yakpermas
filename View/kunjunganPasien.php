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