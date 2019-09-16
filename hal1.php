<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "<h1>Perhitungan</h1>";
   
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Mangga</h1><br>
         <input type="number" name="no1"><pre></pre> <input type="number" nama="no2"><br>
         <input type="submit" name="samadengan">
        <?php 
            if ($samadengan) {
                 $hasil = $no1 + $no2;
                 echo $hasil;
            }else{
                echo "ccd";
            }
            echo "Hasilnya : $hasil";
        ?>
         
    </body>
    </html>

<?php }
    else {
        header ("location : soal1.php");
   } ?>