<?php
include ('../header.php');
?>
<?php

 session_start();
 $email=$_SESSION['email'];
 if($email==""){

?>
<script type="text/javascript">
document.location='../index.php';
</script>
<?php
 }
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top">
  <div class="container-fluid">
  <img src="../IMG/gambar7.png" width="80" height="80" class="d-inline-block align-top" alt="">
    
  </a>
    <div class="collapse navbar-collapse" id="navbarText" style="margin-left:20px; font-family: 'Righteous', cursive;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="index.php?page=data" href="menu.php?page=home"><i class="bi bi-house"></i>HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="index.php?page=data" href="menu.php?page=data"><i class="bi bi-eye"></i>LIHAT DATA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php?page=cetak"><i class="bi bi-printer"></i>PRINT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php?page=tambah"><i class="bi bi-clipboard2-plus"></i>INPUT DATA</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="menu.php?page=tambah_petugas"><i class="bi bi-person-plus"></i>TAMBAH PETUGAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php?page=data_petugas"><i class="bi bi-person"></i>DATA PETUGAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" type="button"  data-bs-toggle="modal" data-bs-target="#keluarModal"><i class="bi bi-door-open"></i>KELUAR</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


 


<div style="margin-top:150px;">
    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
     
            switch ($page) {
              case 'simpan':
                include "simpan.php";
                break;
                case 'home':
                  include "home.php";
                  break;
              case 'tambah':
                include "tambah.php";
                break;
                case 'edit-barang':
                  include "edit.php";
                  break;
                case 'data':
                    include "data.php";
                    break;
                    case 'update':
                      include "update.php";
                      break;
                      case 'cetak':
                        include "cetak.php";
                        break;
                        case 'keluar':
                          include "logout.php";
                          break;
                          case 'edit-petugas':
                            include "edit_petugas.php";
                            break;
                            case 'tambah_petugas':
                              include "register.php";
                              break;
                              case 'data_petugas':
                                include "data_petugas.php";
                                break;
            }
        }else{
            include "home.php";
        }
 
     ?>
</div>
<div class="modal fade" id="keluarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">LOGOUT</h1>
       
      </div>
      <div class="modal-body">
       YAKIN INGIN KELUAR?
      </div>
      <div class="modal-footer">
      <a href="logout.php" class="btn btn-sm btn-dark"data-toggle="modal" data-target="#ModalLoginForm">YA</a>
      <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">TIDAK</button>
      </div>
    </div>
  </div>
</div>
<div class="footer">




</div>

<?php
include ('../footer.php');
  ?>