<?php


include('../koneksi.php');
$id          = $_POST['id'];
$tgl_ubah     = date("Y-m-d H:i:s");
$kondisi          = $_POST['kondisi'];




$query = "UPDATE data_barang SET tgl_ubah = '$tgl_ubah', kondisi = '$kondisi' WHERE id = '$id'";


if($conn->query($query)) {
    
    header("location: menu.php?page=data");
} else {
   
    echo "Data Gagal    Diupate!";
}

?>