<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = '$id'";

if($conn->query($query)) {
    header("location: menu.php?page=data_petugas");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>