<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 besar penyakit</title>
    <link rel="stylesheet" href="../assets/css/form1.css">
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
            <div class="main">
                <div class="form-box">
                    <h2 class="title-content">Daftar 10 Diagnosa Terbanyak</h2>
                    <input type="text" class="" name="" placeholder="Bulan">
                    <input type="text" class="search" name="" placeholder="Tahun">
                    <table class="button">
                        <tr>
                            <td>
                                <button type="submit" class="submit" name="">Cari</button>
                            </td>
                            <td>
                                <button type="" class="submit" name="">Cetak</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="line"></div>
            </div>
            <div class="content1">
                <table>
                    <tr>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>I10</td>
                        <td>Hypertention</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>E10.9</td>
                        <td>Diabetes Mellitus insulin</td>
                        <td>25</td>
                    </tr>
                </table>
            </div>
        </div>
    </form>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>