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
        return ('username tidak terdaftar');

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
}