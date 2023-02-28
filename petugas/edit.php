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
                  <input type="hidden" name="id" value="<?php echo $row['id']?>" class="form-control">
                  <label>KONDISI</label>
                  <select name="kondisi"   class="form-control">
                  <option><?php echo $row['kondisi'] ?></option>
                    <option>BAIK</option>
                    <option> RUSAK RINGAN</option>
                    <option>RUSAK BERAT</option>
                    <option>DIPERBAIKI</option>
                  </select>
                </div><br>

                
                
                
                <button type="submit" class="btn btn-dark">UPDATE</button>
                <a href="menu.php"> <button type="" class="btn btn-light">KEMBALI</button>
</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
include ('../footer.php');
  ?>