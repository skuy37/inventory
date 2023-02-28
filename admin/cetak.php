<?php
include ('../header.php');
?>
  <body>
  <div class="container" style="margin-top: 80px; font-family: 'Righteous', cursive;  ">
  <form action="" method="get">
              <div class="row g-3 align-items-center">
                   
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                        <input type="hidden" class="form-control" name="page" required value="cetak">
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
                <div style="margin-left: 90%;">
                    <button class="btn btn-dark" onclick="printDiv('print')"><i class="bi bi-printer"></i></button>
                    <a href="menu.php?page=cetak"><button  class="btn btn-secondary"  ><i class="bi bi-arrow-clockwise"></i></button></a>
                </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <fieldset id="print">

          
              <table class="table table-bordered" id="myTable">
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
                     
                  </tr>
                
                <?php 
                  } 
                 ?>
                </tbody>
               
              </table>
              </fieldset>
      </div>
    </div>

   
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
      <script>
      function printDiv (el){
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;

        document.body.innerHTML=b;
        window.print();
        document.body.innerHTML=a;
      }
    </script>
    
  <?php
include ('../footer.php');
  ?>
