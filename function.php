<?php
$conn = mysqli_connect("localhost", "root", "", "db_pegawai");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;
    $name = htmlspecialchars($data['name']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $password2 = $data['password2'];

    $user = mysqli_query($conn, "SELECT username FROM pegawai where username = '$username'");

    if (mysqli_fetch_assoc($user)) {
        echo "<small style ='color:red;''>Username Sudah Ada!</small>";
        return false;
    } else if ($password !== $password2) {
        echo "<small style ='color:red;''>Password Tidak Sama!</small>";
        return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO pegawai
                VALUES
                ('','$username','$password','$name')";

        mysqli_query($conn, $query);
        Header("Location:index.php");
    }
}

function login($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];

    $user = mysqli_query($conn, "SELECT * FROM pegawai WHERE username = '$username'");
    if (mysqli_num_rows($user) === 1) {
        $row = mysqli_fetch_assoc($user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['user'] = $username;
            return  Header("Location:index.php");
        } else {
            echo "<small style ='color:red;''>Password Salah!</small><br><br>";
            return false;
        }
    } else {
        echo "<small style ='color:red;''>Username Tidak Ada!</small><br><br>";
        return false;
    }
}
