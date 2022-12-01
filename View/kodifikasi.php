<?php
include('../App/Controllers/Controller.php');
$user = new Database();
?>
<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kodifikasi Pasien</title>
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
            <h1>Daftar Kodifikasi Pasien</h1>
            <div class="data-pasien">
                <table>
                    <tr>
                        <th>No Antrian</th>
                        <th>Nama Pasien</th>
                        <th>Poli</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $i = 1;
                    foreach ($user->getAntrianKodifikasi() as $pasien) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $pasien["nama_pasien"]; ?></td>
                        <td><?= $pasien["nama_poli"]; ?></td>
                        <td>
                            <button class="aksi">
                                <a href="editKodifikasi.php?id=<?= $pasien["id_pendaftaran"]; ?>">pilih</a>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>