<?php
include 'connect.php';

if (isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $notlp = $_POST['notlp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO user (username, password, nama, notlp, email, alamat) VALUE ('$username', '$password', '$nama', '$notlp', '$email', '$alamat')";
    $query = mysqli_query($db, $sql);

    if ($query){
        header('Location: login.php');
    } else{
        header('Location: proses_signup.php');
    }
} else {
    header('Location: login.php');
}
?>