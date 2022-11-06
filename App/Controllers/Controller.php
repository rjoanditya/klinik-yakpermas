<?php

/**
 * Backend
 * ----------------------------------------------------------
 * Controller digunakan untuk melakukan proses sistem
 * Hasil dari pemrosesan akan ditampilkan dalam view Frontend
 */

class Controller
{
    public static function login()
    {
        header("Location./View/login.php");
    }


    public static function dashboard()
    {
        $_SESSION['login'];
        if ($_SESSION['login']) {
            header("Location:./View/");
        }
        header("Location:./View/");
    }
}