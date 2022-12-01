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
<?php include 'sidebar.php'; ?>
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