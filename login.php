<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location:index.php");
    exit;
}

require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="username" required>
        <br>
        <input type="password" name="password" placeholder="password" required>
        <br>
        <?php
        if (isset($_POST['login'])) {
            login($_POST);
        }
        ?>
        <button type="input" name="login">Login</button>
    </form>
</body>

</html>