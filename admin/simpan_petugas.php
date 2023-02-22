<?php


include('../koneksi.php');


$username          = $_POST['username'];
$email = $_POST['email'];
$password          = $_POST['password'];
$level = $_POST['level'];




$query = "INSERT INTO users (username, email, password, level) VALUES ('$username', '$email', '$password', '$level')";


if($conn ->query($query)) {

   
    header("location: menu.php?page=data_petugas");
   

} else {

    
    echo "Data Gagal Disimpan!";

}

?>
