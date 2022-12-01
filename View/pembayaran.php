<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="../assets/css/pembayaran.css">
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
            <div class="hero">
                <div class="form-box">
                    <p>KLINIK YAKPERMAS<br>
                        Jl. Raya Jompo Kulon Sokaraja, Banyumas, jawa Tengah 53181 <br>
                        Telp : (0281)6596816 Email : info@politeknikyakpermas.ac.id</p>
                    <h2>KWITANSI</h2>
                    <form action="" method="" class="input-group">
                        <label for="No.kwitansi">No Kwitansi</label>
                        <input type="text" class="input-field" name="No.kwitansi" placeholder=""><br>
                        <label for="diterima">Telah Diterima Dari</label>
                        <input type="text" class="input-field" name="diterima" placeholder=""><br>
                        <label for="uangsebanyak">Uang Sebanyak</label>
                        <input type="text" class="input-field" name="uangsebanyak" placeholder=""><br>
                        <label for="untukpembayaran">Untuk Pembayaran
                        </label>
                        <input type="text" class="input-field" name="untukpembayaran" placeholder=""><br>



                        <div class="ttd">
                            <table>
                                <br>
                                <br>
                                <br>
                                <br>
                                <tr>
                                    <td class="ttd-pasien">
                                        (......................................) <br>
                                        Pasien/Keluarga Pasien
                                    </td>
                                    <td class="ttd-admin">
                                        (......................................) <br>
                                        Adm.Keuangan
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <button class="btn"><a href="#">Cetak</a></button>
                    </form>
                </div>
            </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>