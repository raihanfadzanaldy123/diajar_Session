<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user1'];
    $pass= $_POST['pass1'];

    if ($user == "angsam" && $pass == "123") {
        $_SESSION['login'] = $user;
        echo "<h1>Anda Berhasil Login</h1>";
        echo "<h2>Klik <a href='soalz.php'>di sini</a> untuk menuju ke axeoren-shin";
    }
}
    else {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>tugas Awal</title>
        </head>
        <body>
        
        <fieldset>
        <legend><marque><h1>Login dulu bos</h1></marque></legend>
            <form action="" method="post">
        Username : <input type="text" name="user1"><br>
        password : <input type="password" name="pass1"><br>
        <input type="submit" name="Login" value="Log-in">
            </form>
        </fieldset>
        </body>
        </html>
        
    <?php } ?>