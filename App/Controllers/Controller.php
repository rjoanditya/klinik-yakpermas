<?php

// Backend
// ----------------------------------------------------------
// Controller digunakan untuk melakukan proses sistem
// Hasil dari pemrosesan akan ditampilkan dalam view Frontend

class Database
{
    var $db_hostname  = "localhost";
    var $db_database  = "dbklinik";
    var $db_username  = "root";
    var $db_password  = "";
    public $conn;

    public function __construct()
    {
        $this->conn =  mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->db_database);
    }

    public function getPasien()
    {
        $query = $this->conn->query("SELECT * FROM lib_pasien");
        while ($data = mysqli_fetch_array($query)) {
            $pasien[] = $data;
        }
        return $pasien;
    }

    public function getAntrianObat()
    {
        $query = $this->conn->query("SELECT pendaftaran_poli.id_pendaftaran, lib_pasien.nama_pasien, lib_obat.nama_obat, diagnosis.jumlah_obat, lib_obat.harga_satuan, lib_poli.nama_poli FROM diagnosis INNER JOIN pendaftaran_poli ON pendaftaran_poli.id_pendaftaran = diagnosis.id_pendaftaran INNER JOIN lib_pasien ON pendaftaran_poli.id_pasien = lib_pasien.id_pasien INNER JOIN lib_poli ON pendaftaran_poli.id_poli = lib_poli.id_poli INNER JOIN lib_obat ON diagnosis.id_obat = lib_obat.id_obat");
        while ($data = mysqli_fetch_array($query)) {
            $pasien[] = $data;
        }
        return $pasien;
    }

    public function getAntrianKodifikasi()
    {
        $query = $this->conn->query("SELECT pendaftaran_poli.id_pendaftaran, lib_poli.nama_poli, lib_pasien.no_rm, lib_pasien.nik, lib_pasien.nama_pasien, lib_pasien.tgl_lahir, lib_pasien.alamat, lib_pasien.jenis_kelamin, diagnosis.diagnosis_utama, diagnosis.diagnosis_sekunder, diagnosis.tindakan FROM pendaftaran_poli INNER JOIN lib_pasien ON pendaftaran_poli.id_pasien = lib_pasien.id_pasien INNER JOIN diagnosis ON pendaftaran_poli.id_pendaftaran = diagnosis.id_pendaftaran INNER JOIN lib_poli ON pendaftaran_poli.id_poli = lib_poli.id_poli;");
        while ($data = mysqli_fetch_array($query)) {
            $pasien[] = $data;
        }
        return $pasien;
    }

}

class Auth extends Database
{
    /**
     * view daftar
     */
    public function signUp()
    {
        header("Location:./daftarakunpetugas.php");
    }

    /**
     * get data from signUp
     *
     * @insert to lib_user
     */
    public function storeUser($table_name)
    {
        $data = [
            'nama_lengkap'  => $_POST['nama'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'role'          => $_POST['role'],
            'alamat'        => $_POST['alamat'],
            'no_telp'       => $_POST['telp'],
            'username'      => $_POST['username'],
            'password'      => md5($_POST['password']),
        ];

        $string = "INSERT INTO " . $table_name . " (";
        $string .= implode(",", array_keys($data)) . ') VALUES (';
        $string .= "'" . implode("','", array_values($data)) . "')";
        if (mysqli_query($this->conn, $string)) {
            return header("Location:./login.php");
        } else {
            echo mysqli_error($this->conn);
        }
    }

    public function storeKodifikasi($table_name)
    {
            $id_kodifikasi = $_POST["id_kodifikasi"];
            $id_pendaftaran = $_POST["id_pendaftaran"];
            $id_diagnosis = $_POST["id_diagnosis"];
            $icd10_utama = $_POST["icd10_utama"];
            $icd10_sekunder = $_POST["icd10_sekunder"];
            $icd9 = $_POST["icd9"];

            $query = "REPLACE INTO $table_name (id_kodifikasi, id_pendaftaran, id_diagnosis, icd10_utama, icd10_sekunder, icd9) VALUES ('$id_kodifikasi', '$id_pendaftaran','$id_diagnosis','$icd10_utama','$icd10_sekunder','$icd9')";
    
            mysqli_query($this->conn, "$query");
            return header("Location:./kodifikasi.php");
    }

    public static function login()
    {
        header("Location:./login.php");
    }

    public function storeLogin($table_name)
    {
        $data = [
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
        ];
        $query = "SELECT * FROM " . $table_name . " WHERE username =" . $data['username'] . "&& password=" . $data['password'];
        if ($query) {
            header("Location:./dashboard.php");
        }
        echo ('gagal');
        // return ('username tidak terdaftar');

        // $string .= implode(",", array_keys($data)) . ') VALUES (';
        // $string .= "'" . implode("','", array_values($data)) . "')";
    }
}

class Controller extends Database
{
    public static function dashboard()
    {
        $_SESSION['login'];
        if ($_SESSION['login']) {
            header("Location:./View/");
        }
        header("Location:./View/");
    }

    public static function baru()
    {
    }
}