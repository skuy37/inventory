<?php


include('../koneksi.php');
$id          = $_POST['id'];
$kode_barang  =$_POST['kode_barang'];
$tgl_ubah     = date("Y-m-d H:i:s");;
$tgl_masuk     = $_POST['tgl_masuk'];
$kondisi          = $_POST['kondisi'];
$nama_barang          = $_POST['nama_barang'];
$lab          = $_POST['lab'];
$ruangan          = $_POST['ruangan'];



$query = "UPDATE data_barang SET tgl_ubah = '$tgl_ubah', kondisi = '$kondisi', nama_barang = '$nama_barang', lab = '$lab', ruangan = '$ruangan', kode_barang = '$kode_barang', tgl_masuk = '$tgl_masuk' WHERE id = '$id'";


if($conn->query($query)) {
    
    header("location:menu.php?page=data");
} else {
   
    echo "Data Gagal    Diupate!";
}

?>