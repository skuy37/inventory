<?php


include('../koneksi.php');

$id  =$_POST['id'];
$password     = $_POST['password'];
$level          = $_POST['level'];
$email          = $_POST['email'];
$username          = $_POST['username'];




$query = "UPDATE users SET password = '$password', level = '$level', email = '$email', username = '$username' WHERE id = '$id'";


if($conn->query($query)) {
    
    header("location: menu.php?page=data_petugas");
} else {
   
    echo "Data Gagal    Diupate!";
}

?>