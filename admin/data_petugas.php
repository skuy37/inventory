<?php
include ('../header.php');
  ?>
  
    <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-12">
            <div class="card-header ">
             DATA PETUGAS
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
                    
                      
                      while($d = mysqli_fetch_array($data)){

                      
                      
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