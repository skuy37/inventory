<?php
    include ('../header.php');

?>
  
    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-12">
            <div class="card-header ">
             DATA PETUGAS
            </div><br>
            <form method="GET" action="" style="margin-left: 20px;">
            <span class="placeholder col-6"></span>
            <span class="placeholder w-75"></span>
            <span class="placeholder" style="width: 25%;"></span>
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <input type="text" class="form-control" name="kata_cari" />
                <input type="hidden" class="form-control" name="page" required value="data_petugas">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-dark" name="cari-petugas"><i class="bi bi-search"></i></button>
              </div>
            </div>
            </form>
            <div style="margin-left: 95%;">
                    <a href="menu.php?page=data_petugas"><button  class="btn btn-secondary" title="REFRESHg" ><i class="bi bi-arrow-clockwise"></i></button></a>
                </div>
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
                            <a href="hapus_petugas.php?id=<?php echo $d['id'] ?>"  onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-secondary"><i class="bi bi-eraser"></i>HAPUS</a>
                     
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
