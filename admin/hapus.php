<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM data_barang WHERE id = '$id'";

if($conn->query($query)) {
    header("location: menu.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>