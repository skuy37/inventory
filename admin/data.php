<?php
include ('../header.php');
  ?>
<section class="vh-100" style="background-image: url('../IMG/gambar6.png');  background-size:cover; background-repeat: no-repeat;">
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
                        $batas = 10;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                 
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $data = mysqli_query($conn,"select * from data_barang");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
                 
                        $data = mysqli_query($conn,"select * from data_barang limit $halaman_awal, $batas");
                        $nomor = $halaman_awal+1;
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
                                    <a href="hapus.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-secondary"><i class="bi bi-eraser"></i>HAPUS</a>
                                  </td>
                              </tr>                             
                              <?php                                
                              }
                              ?>
                      </tbody>
                    </table>  
                    <nav>
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" <?php if($halaman > 1){ echo "href='menu.php?page=data&halaman=$previous'"; } ?>>Previous</a>
                        </li>
                        <?php 
                        for($x=1;$x<=$total_halaman;$x++){
                          ?> 
                          <li class="page-item"><a class="page-link" href="menu.php?page=data&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                          <?php
                        }
                        ?>				
                        <li class="page-item">
                          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='menu.php?page=data&halaman=$next'"; } ?>>Next</a>
                        </li>
                      </ul>
                    </nav>            
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
