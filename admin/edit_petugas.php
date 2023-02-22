<?php 
  
  include('../koneksi.php');
  
include ('../header.php');
 
  $username = $_GET['id'];
  
  $query = "SELECT * FROM users WHERE id = '$username' LIMIT 1";

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
              <form action="update_petugas.php" method="POST">
                
            
             
             
                <div class="form-group">
                <label>USERNAME</label>
                  <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div><br>
                <div class="form-group">
                <label>EMAIL</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div><br>
                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" name="password" value="<?php echo $row['password'] ?>" class="form-control">
                </div><br>
                <div class="form-group">
                  <label>LEVEL</label>
                  <select name="level" id="" class="form-control">
                    <option ><?php echo $row['level'] ?></option>
                    <option >admin</option>
                    <option>petugas</option>
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
 