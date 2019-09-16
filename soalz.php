<?php
session_start(['Login']);
if (isset($_SESSION['login'])) {
     echo "<h1>Selamat Datang Di Halaman <font color='green'>Skemekubow Kamfur</font> ".$user."</h1><br>";
    echo "<a href='soalzz.php'> Logout </a>&nbsp";
    echo "<a href='hal1.php'> halaman1 </a>";
}
      else {
        header ("location : soal1.php");
    }

?>