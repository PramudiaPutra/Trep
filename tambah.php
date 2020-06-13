<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:belumlogin.php");
}

require 'function.php';
$username = $_SESSION['user'];
$user = query("SELECT * FROM pegawai WHERE username='$username'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Welcome :
        <?php foreach ($user as $row) :
            echo $row['username'] ?>
            |
        <?php
            echo $row['nama'];
        endforeach; ?>
        <button onclick="location.href='logout.php'">Logout</button>
    </h4>
    <h1>Tambah Data Pegawai</h1>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="nama lengkap" required><br>
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="password" name="password2" placeholder="ulangi password" required><br>
        <?php
        if (isset($_POST['register'])) {
            register($_POST);
        }
        ?>
        <br>
        <button type="submit" name="register">Register</button>
    </form>
</body>

</html>