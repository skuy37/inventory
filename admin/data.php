<?php
include ('../header.php');
  ?>
<section class="vh-100" style="background-image: url('../IMG/gambar6.png'); ">
    <div class="container" style="margin-top: 80px ; font-family: 'Righteous', cursive;">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BARANG
            </div>
            <div class="card-body">
            
            <form action="" method="get">
              <div class="row g-3 align-items-center">
              <span class="placeholder col-6"></span>
<span class="placeholder w-75"></span>
<span class="placeholder" style="width: 25%;"></span>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                        <input type="hidden" class="form-control" name="page" required value="data">
                    </div>
                    <div class="col-auto">
                        -
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-auto">
                    <button class="btn btn-dark" type="submit" name="cari"><i class="bi bi-search"></i></button>  
                    </div>
                </div>
                </form>
               
                
               

                
                    <table class="table  table-bordered mt-3" id="myTable">
                      
                      <thead>
                        <tr>
                          <th scope="col">NO.</th>
                          <th scope="col">NAMA BARANG</th>
                          <th scope="col">KODE BARANG</th>
                          <th scope="col">LABORATORIUM</th>
                          <th scope="col">RUANGAN</th>
                          <th scope="col">KONDISI</th>
                          <th scope="col">TANGGAL MASUK</th>
                          <th scope="col">TANGGAL UBAH</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      include('../koneksi.php');
                      $no = 1;
                   
                      

                        if(isset($_GET['cari']) ){
                        
                          $data = mysqli_query($conn, "SELECT * FROM data_barang WHERE tgl_masuk BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
                      }else{
                         
                          $data = mysqli_query($conn, "select * from data_barang");		
                      }


                    
                      $no = 1;
                      
                      while($d = mysqli_fetch_array($data)){

                      
                  ?>
                  

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['nama_barang'] ?></td>
                            <td><?php echo $d['kode_barang'] ?></td>
                            <td><?php echo $d['lab'] ?></td>
                            <td><?php echo $d['ruangan'] ?></td>
                            <td><?php echo $d['kondisi'] ?></td>
                            <td><?php echo $d['tgl_masuk'] ?></td>
                            <td><?php echo $d['tgl_ubah'] ?></td>
                            <td class="text-center">
                              <a href="menu.php?page=edit-barang&id=<?php echo $d['id'] ?>" class="btn btn-sm btn-dark"><i class="bi bi-pen"></i>EDIT</a>
                              <a href="hapus.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-light"><i class="bi bi-eraser"></i>HAPUS</a>
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
    </div>
</section>
   
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

  
<?php
include ('../footer.php');
  ?>
