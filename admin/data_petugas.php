<?php
    include ('../header.php');

?>
  
    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-12">
            <div class="card-header ">
             DATA PETUGAS
            </div>
            <form method="GET" action="">
                <label>Kata Pencarian : </label>
                <input type="text" name="kata_cari" />
                <input type="hidden" class="form-control" name="page" required value="data_petugas">
                <button type="submit" name="cari-petugas">Cari</button>
            </form>
            
              <table class="table table-bordered mt-3" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">LEVEL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    include('../koneksi.php');
                    $no = 1;
                    $data = mysqli_query($conn, "select * from users");		
                    if(isset($_GET['kata_cari'])) {
                        $kata_cari = $_GET['kata_cari']; 
                        $data = mysqli_query($conn, "SELECT * FROM users WHERE username like '%".$kata_cari."%'");  
                    } else { 
                        $query = "SELECT * FROM users ORDER BY id ASC";
                    }
                     while ($d = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $d['username'] ?></td>
                        <td><?php echo $d['email'] ?></td>
                        <td><?php echo $d['level'] ?></td>
                        <td><?php echo $d['password'] ?></td>
                        <td class="text-center">
                            <a href="menu.php?page=edit-petugas&id=<?php echo $d['id'] ?>" class="btn btn-sm btn-dark"><i class="bi bi-pen"></i>EDIT</a>
                            <a href="hapus_petugas.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-light" data-toggle="modal" data-target="#ModalLoginForm"><i class="bi bi-eraser"></i>HAPUS</a>
                     
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                    </tbody>
                </table>
            </div>
      </div>
    </div>

    
 



    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    
    <?php
include ('../footer.php');
  ?>
