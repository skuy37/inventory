<?php


include('../koneksi.php');

//get data dari form
$nama_barang          = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$tgl_masuk          = $_POST['tgl_masuk'];
$tgl_ubah = $_POST['tgl_ubah'];
$lab          = $_POST['lab'];
$ruangan = $_POST['ruangan'];
$kondisi          = $_POST['kondisi'];



$query = "INSERT INTO data_barang (nama_barang, kode_barang, tgl_ubah, tgl_masuk, kondisi, lab, ruangan) VALUES ('$nama_barang', '$kode_barang', '$tgl_ubah', '$tgl_masuk', '$kondisi', '$lab', '$ruangan')";


if($conn ->query($query)) {

   
    header("location:  menu.php");
   

} else {

    
    echo "Data Gagal Disimpan!";

}

?>