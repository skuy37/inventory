





<?php 

include ('header.php');
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    $message = "EMAIL ATAU PASSWORD SALAH.//.COBA LAGI";
  echo "<script type='text/javascript'>alert('$message');</script>";
  }
 }
 ?>

 
    <div style="">
    <section class="vh-100" style="background-image: url('IMG/gambar6.png'); ">
  <div class="container py-5 h-100" style="font-family: 'Righteous', cursive;">
    <div class="row d-flex justify-content-center align-items-center h-100"  >
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 9rem; background-color: rgba(0, 0, 0, 0.3);">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block mt-5" >
              <img src="IMG/gambar7.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-5 d-flex align-items-center" style="margin-left:120px;">
              <div class="card-body p-4 p-lg-5 text-white">
              <form id="login-form" class="form" action="proses_login.php" method="post">
                            <h3 class="text-center">LOGIN</h3>
                            <div class="form-outline mb-4">
                                <label for="username" > <b>EMAIL</b> </label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-outline mb-4" style="color:white;">
                                <label for="password" >  <b>PASSWORD</b> </label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="submit" name="submit" class="btn btn-dark" value="SUBMIT">
                            </div>
                        </form>
               


                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
<?php
include('footer.php');
?>