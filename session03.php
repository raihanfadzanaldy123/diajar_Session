<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();

    echo "<h1>Anda Berhasil Logout</h1>";
    echo "<h2>Klik <a href='session01.php'> Disini </a> untuk login Kembali</h2>";
    echo "<h2>Anda Sekarang Tidak Bisa Masuk ke Halaman <a herf='session02.php>
    </a> lagi</h2>";
}

?>