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
            <form method="GET" action="" style="margin-left: 20px;">
                <div class="row g-3 align-items-center">
                  <div class="col-auto">
                    <input type="text" class="form-control" name="kata_cari" />
                    <input type="hidden" class="form-control" name="page" required value="data">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-dark" name="cari-data"><i class="bi bi-search"></i></button>
                  </div>
                </div>
            </form>
            <div style="margin-left: 95%;">
                    <a href="menu.php?page=data"><button  class="btn btn-secondary"  title="refresh" ><i class="bi bi-arrow-clockwise"></i></button></a>
                </div>
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
                    
                        
                        $data = mysqli_query($conn,"select * from data_barang");
                        $no = 1;
                        if(isset($_GET['kata_cari'])) {
                            $kata_cari = $_GET['kata_cari']; 
                            $data = mysqli_query($conn, "SELECT * FROM data_barang WHERE nama_barang like '%".$kata_cari."%'");  
                        } else { 
                            $query = "SELECT * FROM data_barang ORDER BY id ASC";
                        }
                        while ($d = mysqli_fetch_assoc($data)) {
                      ?>
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
