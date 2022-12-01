<?php 

require('../App/Controllers/fungsi.php');

$jadwal_dokter = query("SELECT * FROM jadwal_dokter");
if(isset($_POST["cari"])) {
    $jadwal_dokter = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Pasien</title>
    <link rel="stylesheet" href="../assets/css/dokter.css">
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
            <h1>Jadwal Dokter</h1>
            <div class="input-container">
            <form action="" method = "post">
                <input type="text" class = "input" name = "keyword" placeholder = "Pencarian" autocomplete = off>
                <button type ="submit" name = "cari" class="aksi-dokter aksi1" >Cari</button>
            </form>
            </div>
            <div class="data-dokter">
                <table class="tabel-dokter">
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Jadwal</th>
                        <th>Nama</th>
                        <th>Poli</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $i = 1;?>
                    <?php foreach($jadwal_dokter as $row) : ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row["hari"]; ?></td>
                        <td><?php echo $row["jadwal"]; ?></td>
                        <td><?php echo $row["nama_dokter"]; ?></td>
                        <td><?php echo $row["nama_poli"]; ?></td>
                        <td>
                          <a href="editDokter.php?id=<?php echo $row["id"]; ?>" class="aksi-dokter aksi1">
                          Edit
                          </a>
                          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin dihapus ?');" class="aksi-dokter">
                          Hapus
                          </a>
                      </td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>

    <script src="../assets/js/sidebar.js"></script>
</body>

</html>