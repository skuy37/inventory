<?php


include('../koneksi.php');



$email = $_POST['email'];
$password          = $_POST['password'];
$level = $_POST['level'];




$query = "INSERT INTO users ( email, password, level) VALUES ('$email', '$password', '$level')";


if($conn ->query($query)) {

   
    header("location: menu.php?page=data_petugas");
   

} else {

    
    echo "Data Gagal Disimpan!";

}

?>
