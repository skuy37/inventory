




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
 
    <title>LOGIN</title>
</head>
<?php 
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
 }
 ?>
<body >
 
    <div>
    <section class="vh-100" style="background-color: black;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block mt-5">
              <img src="IMG/gambar_3.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form id="login-form" class="form" action="proses_login.php" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-outline mb-4">
                                <label for="username" >Username:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="password" >Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="submit" name="submit" class="btn btn-dark" value="submit">
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
</body>
</html>