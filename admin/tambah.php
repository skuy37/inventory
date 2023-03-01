<?php
include('../header.php');
?>


    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header" >
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="menu.php?page=simpan" method="POST">
                
                <div class="form-group">
                  <label>NAMA BARANG</label>
                  <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control">
                </div><br>

                <div class="form-group">
                  <label>KODE BARANG</label>
                  <input type="text" name="kode_barang" placeholder="Masukkan Kode Barang " class="form-control">
                </div><br>
                <div class="form-group">
                  <label>LABORATORIUM</label>
                  <select name="lab" id="" class="form-control">
                    <option></option>
                    <option>LAB 1</option>
                    <option>LAB 2</option>
                    <option>LAB 3</option>
                  </select>
                </div><br>
                <div class="form-group">
                  <label>RUANGAN</label>
                  <select name="ruangan" id="" class="form-control">
                    <option></option>
                    <option>R1</option>
                    <option>R2</option>
                    <option>R3</option>
                  </select>
                </div><br>
                <div class="form-group">
                  <label>TANGGAL MASUK</label>
                  <input type="date" name="tgl_masuk" placeholder="Masukkan Nama Siswa" class="form-control">
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
                <button type="reset" class="btn btn-secondary">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
include('../footer.php');
?>