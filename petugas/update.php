<?php


include('../koneksi.php');

$kode_barang  =$_POST['kode_barang'];
$tgl_ubah     = $_POST['tgl_ubah'];
$kondisi          = $_POST['kondisi'];




$query = "UPDATE data_barang SET tgl_ubah = '$tgl_ubah', kondisi = '$kondisi' WHERE kode_barang = '$kode_barang'";


if($conn->query($query)) {
    
    header("location: menu.php");
} else {
   
    echo "Data Gagal    Diupate!";
}

?>