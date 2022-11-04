<?php

/**
 * Backend
 * ----------------------------------------------------------
 * Controller digunakan untuk melakukan proses sistem
 * 
 * Hasil dari pemrosesan akan ditampilkan dalam view Frontend
 */
class Controller
{
    public static function dashboard()
    {
        header("Location:./view/");
    }
}