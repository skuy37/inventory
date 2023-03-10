<?php


include('../koneksi.php');

$id  =$_POST['id'];
$password     = $_POST['password'];
$level          = $_POST['level'];
$email          = $_POST['email'];




$query = "UPDATE users SET password = '$password', level = '$level', email = '$email' WHERE id = '$id'";


if($conn->query($query)) {
    
    header("location: menu.php?page=data_petugas");
} else {
   
    echo "Data Gagal    Diupate!";
}

?>