<?php 
include 'koneksi.php';
include '../header.php';
if(isset($_POST['simpan'])){
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $kondisi = $_POST['kondisi'];
    $nama_gambar = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $sdd = $conn->query("INSERT INTO data_barang VALUE ('', '$nama_barang', '$kode_barang', '$kondisi', '$nama_gambar')");
    if($sdd){
        move_uploaded_file($file_tmp, '../gambar/'.$nama_gambar);
    }

}
?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header" >
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multypart/form-data">
                
                <div class="form-group">
                  <label>NAMA BARANG</label>
                  <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control">
                </div><br>

                <div class="form-group">
                  <label>KODE BARANG</label>
                  <input type="text" name="kode_barang" placeholder="Masukkan Kode Barang " class="form-control">
                </div><br>
                <div class="form-group">
                  <label>gambar</label>
                  <input type="file" name="gambar" id="formfile" placeholder="Masukkan Kode Barang " class="form-control">
                </div><br>
               
                <div class="form-group">
                  <label>KONDISI</label>
                  <select name="kondisi" id="" class="form-control">
                    <option>BAIK</option>
                    <option>RUSAK RINGAN</option>
                    <option>RUSAK BERAT</option>
                    <option>DIPERBAIKI</option>
                  </select>
                </div><br>
                
                <button type="submit" class="btn btn-dark">SIMPAN</button>
                <button type="reset" class="btn btn-light">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
include('../footer.php');
?>