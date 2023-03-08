<?php
include '../header.php';
include '../koneksi.php';
?>
<div class="mt-5">
<div style="text-align: center; font-family: 'Righteous', cursive;">
<?php echo "<h1>SELAMAT DATANG, " . $_SESSION['email'] ."!". "</h1>"; ?>
    <h1>DI APLIKASI INVENTORY LABORATORIUM</h1>
  </div>
<div class="row" style="margin-left: 300px; margin-top: 50px; font-family: 'Righteous', cursive;">
  <div class="col-md-3" style="margin-top: 100px;">
    <div class="card"  style=" background-color:black;">
      <div class="card-body">
        <p class="card-text" style="color:white;"><b>JUMLAH BARANG</b><br>
       <?php
        include '../koneksi.php';
       
       $jumlah_barang=$conn->query("select * from data_barang");
       $j=$jumlah_barang->num_rows;
       echo $j;
       ?>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div>
      <img src="../IMG/gambar4.png" width="250" height="200" class="d-inline-block align-top" alt="">
    </div>
  </div>

  <div class="col-md-3"  style="margin-top: 100px;">
    <div class="card" >
      <div class="card-body" style=" background-color: #F8F9FA;">
      <p class="card-text"><b>JUMLAH PETUGAS</b></p>
       <?php
        include '../koneksi.php';
       
       $jumlah_barang=$conn->query("select * from users");
       $j=$jumlah_barang->num_rows;
       echo $j;
       ?>
      </div>
    </div>
  </div>
</div>
</div>
