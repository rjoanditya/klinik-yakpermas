<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan</title>
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
            <!-- <div class="content3">
                <h1>Pemeriksaan Pasien</h1>
            </div> -->
            <div class="main">
                <h2>Pemeriksaan Pasien</h2>

                <table>
                    <tr>
                        <td>
                            <label for="">No. RM</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Keluhan</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Alergi Makanan</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Sistole</label>
                            <input type="text" name="" placeholder="                               mmHg">
                        </td>
                        <td>
                            <label for="">Heart Rate</label>
                            <input type="text" name=""  placeholder="                                  bpm">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Anamnesa</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Alergi Udara</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Diastole</label>
                            <input type="text" name=""  placeholder="                               mmHg">
                        </td>
                        <td>
                            <label for="">Golongan Darah</label>
                            <input type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="">
                        </td>
                        <td>
                            <label for="">Diagnosa Utama</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Alergi Obat</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Lingkar Perut</label>
                            <input type="text" name="" placeholder="                                     cm">
                        </td>
                        <td>
                            <label for="">Obat</label>
                            <input type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Diagnosa Sekunder</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Tinggi Badan</label>
                            <input type="text" name="" placeholder="                                     cm">
                        </td>
                        <td>
                            <label for="">Suhu Tubuh</label>
                            <input type="text" name=""  placeholder="                                       °C">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Tanggal Pemeriksaan</label>
                            <input type="datetime-local" name="">
                        </td>
                        <td>
                            <label for="">Tindakan</label>
                            <input type="text" name="">
                        </td>
                        <td>
                            <label for="">Berat Badan</label>
                            <input type="text" name="" placeholder="                                      kg">
                        </td>
                        <td>
                            <label for="">Respiratory Rate</label>
                            <input type="text" name="" placeholder="                         kali/menit">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><button type="submit" class="submit"
                                onclick="return alert('Data berhasil disimpan');"><b>Simpan</b></button></td>
                        <td><button type="reset" class="reset"><b>Batal</b></button></td>
                    </tr>
                </table>
            </div>
            
        </div>
    </form>



    <script src="../assets/js/sidebar.js"></script>
</body>

</html>