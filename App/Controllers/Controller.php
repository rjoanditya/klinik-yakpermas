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
        $pasien = [];
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

        $query = 'SELECT * FROM ' . $table_name . ' WHERE username ="' . $data['username'] . '" AND password="' . $data['password'] . '"';
        $result = $this->conn->query($query);
        // var_dump($result->num_rows);
        // die();
        if ($result->num_rows == 1) {
            session_start();
            $_SESSION['login'] = true;
            header("Location:./dashboard.php");
        } else {
            header("Location:./login.php");
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
    /**
     * Function yang digunakan untuk menyimpan pendaftaran pasien
     */
    public function storePasien()
    {

        $dataPasien = [
            'nama_pasien'       => $_POST['nama_pasien'],
            'nik'               => $_POST['nik'],
            'tempat_lahir'      => $_POST['tempat_lahir'],
            'tgl_lahir'         => $_POST['tgl_lahir'],
            'umur'              => $_POST['umur'],
            'jenis_kelamin'     => $_POST['jenis_kelamin'],
            'gol_darah'         => $_POST['gol_darah'],
            'agama'             => $_POST['agama'],
            'pendidikan'        => $_POST['pendidikan'],
            'status_pernikahan' => $_POST['status_pernikahan'],
            'alamat'            => $_POST['alamat'],
            'ibu_kandung'       => $_POST['ibu_kandung'],
        ];

        $query = "INSERT INTO lib_pasien (";
        $query .= implode(",", array_keys($dataPasien)) . ') VALUES (';
        $query .= "'" . implode("','", array_values($dataPasien)) . "')";
        if (mysqli_query($this->conn, $query)) {
            // mendapatkan id pasien terbaru setelah input pasien
            $queries = "SELECT * FROM lib_pasien ORDER BY id_pasien DESC LIMIT 1 ";
            $id_pasien = mysqli_fetch_array($this->conn->query($queries));
            // var_dump($id_pasien['id_pasien']);
            // die();
            $datapoli = [
                'debitur'           => $_POST['debitur'],
                'jenis_perawatan'   => $_POST['jenis_perawatan'],
                'jenis_kunjungan'   => $_POST['jenis_kunjungan'],
                'id_poli'           => $_POST['poli'],
                'id_pasien'        => $id_pasien['id_pasien'],
            ];

            $string = "INSERT INTO pendaftaran_poli (";
            $string .= implode(",", array_keys($datapoli)) . ') VALUES (';
            $string .= "'" . implode("','", array_values($datapoli)) . "')";

            if (mysqli_query($this->conn, $string)) {
                return header("Location:./pendaftaran.php");
            }
        }
    }
}