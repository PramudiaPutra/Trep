<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:belumlogin.php");
}

require 'function.php';
$username = $_SESSION['user'];
$view = query("SELECT * FROM pegawai");
$user = query("SELECT * FROM pegawai WHERE username='$username'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
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
    <h1>Data Pegawai</h1>
    <table>
        <tr>
            <th>ID Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
        </tr>
        <?php foreach ($view as $row) : ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['username'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button onclick="location.href='tambah.php'">Tambah Pegawai</button>
</body>

</html>