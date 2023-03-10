
<?php
include('../header.php');
?>

    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="simpan_petugas.php" method="POST">
                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required>
                </div><br>
                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" name="password" placeholder="Masukkan Passwosrd" class="form-control" required>
                </div><br>
                <div class="form-group">
                  <label>LEVEL</label>
                  <select name="level" id="" class="form-control" required>
                  <option ></option>
                  <option >admin</option>
                  <option>petugas</option>
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