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
            <div class="content1">
                <h2>Riwayat Pemeriksaan Pasien</h2>
                <table>
                    <tr>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Subjective</th>
                        <th>Objective</th>
                        <th>Assesment</th>
                        <th>Planning</th>
                        <th>Petugas</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>Jumat, 28 Oktober 2022 19:00</td>
                        <td>
                            <ul>
                                <li>Anamnesis: Surat keterangan dokter</li>
                                <li>Keluhan: Surat keterangan dokter</li>
                                <li>Alergi Makanan: Tidak Ada</li>
                                <li>Alergi Udara: Tidak Ada</li>
                                <li>Alergi Obat: Tidak Ada</li>
                                <li>Tinggi Badan: 160cm</li>
                                <li>Berat Badan:48 kg</li>
                                <li>Sistole:100 mmHg</li>
                                <li>Diastole: 80 mmHg</li>
                                <li>Lingkar Perut:-</li>
                                <li>Suhu Tubuh:36 °C</li>
                                <li>Respiratory rate: 20/menit</li>
                                <li>Heart rate: 80 bpm</li>
                                <li>Golongan Darah: O</li>
                            </ul>
                        </td>
                        <td></td>
                        <td>
                            <ul>
                                <li>Poli: UMUM</li>
                                <li>Diagnosa Utama: -</li>
                                <li>Diagnosa Sekunder: -</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Tindakan: -</li>
                                <li>Obat: -</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Nama Perawat: Yi chang, S.Kep</li>
                                <li>Nama Dokter:-</li>
                            </ul>
                        </td>
                        <td>
                        <a href="editPemeriksaan.php" class="aksi-dokter aksi1">
                          Edit
                          </a>
                          <a href="" onclick="return confirm('Yakin dihapus ?');" class="aksi-dokter">
                          Hapus
                          </a>
                        </td>
                    </tr>
                </table>
                
            </div>
            <div class="content3">
                
            </div>

        </div>
    </form>



    <script src="../assets/js/sidebar.js"></script>
</body>

</html>