<?php 
  
  include('../koneksi.php');
 
include ('../header.php');

  $id = $_GET['id'];
  
  $query = "SELECT * FROM data_barang WHERE id = '$id' LIMIT 1";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);


  ?>




    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT
            </div>
            <div class="card-body">
              <form action="./menu.php?page=update" method="POST">
              <div class="form-group">
                  <label>NAMA BARANG</label>
                  <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" class="form-control"  required>
                </div><br>
              <div class="form-group">
                  <label>KODE_BARANG</label>
                  <input type="text" name="kode_barang" value="<?php echo $row['kode_barang'] ?>" class="form-control"  required>
                  <input type="hidden" name="id" value="<?php echo $row['id']?>"placeholder="Masukkan Nama Siswa" class="form-control">
                </div><br>
                <div class="form-group">
                  <label>TANGGAL UBAH</label>
                  <select name="lab" id="" class="form-control"  required>
                    <option><?php echo $row['lab'] ?></option>
                    <option>LAB 1</option>
                    <option>LAB 2</option>
                    <option>LAB 3</option>
                  </select>
                </div><br>
                <div class="form-group">
                  <label>TANGGAL UBAH</label>
                  <select name="ruangan" id="" class="form-control">
                    <option><?php echo $row['ruangan'] ?></option>
                    <option>R1</option>
                    <option>R2</option>
                    <option>R3</option>
                  </select>
                </div><br>
            
                <div class="form-group">
                  <label>TANGGAL MASUK</label>
                  <input type="date" name="tgl_masuk" value="<?php echo $row['tgl_masuk'] ?>" class="form-control"  required>
                </div><br>
                <div class="form-group">
                  <label>KONDISI</label>
                  <select name="kondisi"  class="form-control">
                  <option><?php echo $row['kondisi'] ?></option>
                    <option>BAIK</option>
                    <option> RUSAK RINGAN</option>
                    <option>RUSAK BERAT</option>
                    <option>DIPERBAIKI</option>
                  </select>
                </div><br>
                <button type="submit" class="btn btn-dark">UPDATE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
include ('../footer.php');
  ?>