<?php

include('koneksi.php');

//get id
$kode_barang = $_GET['id'];

$query = "DELETE FROM data_barang WHERE kode_barang = '$kode_barang'";

if($conn->query($query)) {
    header("location: menu.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>