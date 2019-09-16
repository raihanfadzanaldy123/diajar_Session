<?php
session_start();

if (isset($_SESSION['login'])) {
    echo "<h1>Selamat Datang ".$_SESSION['login']."</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika sudah Login</h2>";
    echo "<h2>Klik <a href='session03.php'>di sini
            (session03.php)</a> untuk LOGOUT</h2>";
}
    else {
        die("Anda Belum Login. Anda Tidak Berhak Masuk Halaman Ini.
         Silahkan Login Terlebih Dahulu <a herf='session01.php'>Disini</a>");
    }
?>