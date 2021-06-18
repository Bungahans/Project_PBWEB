<?php
include 'connect.php';

if (isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($db,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $cek = mysqli_fetch_array($sql);

    if ($cek['username'] == $username AND $cek['password'] == $password){
        session_start();
        $_SESSION['username'] = $cek['username'];
        $_SESSION['password'] = $cek['password'];
        header('Location: index.php');
    } else{
        header('Locaton: login.php?notif=gagal');
    }
}
?>