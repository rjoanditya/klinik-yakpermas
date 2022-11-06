<?php

/**
 * Backend
 * -------------------------------------
 * Model digunakan untuk mengambil data dari database
 * Data kemudian akan dikirim ke controller untuk dilakukan proses
 */

class User
{
    public function storeUser()
    {
        if ($_POST['submit']) {
            $txt = 'Mendaftar Akun';
        } else {
            $txt = 'Gagal';
        }
        return $txt;
    }
}