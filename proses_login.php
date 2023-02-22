<?php 
include ('koneksi.php');


if (mysqli_connect_errno()){
echo "Koneksi gagal : " . mysqli_connect_error();
}


session_start();


$email = $_POST['email'];
$password = $_POST['password'];


$user = mysqli_query($conn, "select * from users where email='$email' and password='$password'");

$cek = mysqli_num_rows($user);


if($cek > 0){
$data = mysqli_fetch_assoc($user);

if($data['level'] == 'admin'){

$_SESSION['email'] = $email;
$_SESSION['level'] = 'admin';


header('location:admin/menu.php');


}elseif($data['level'] == 'petugas'){

$_SESSION['email'] = $email;
$_SESSION['level'] = 'petugas';


header('location:petugas/menu.php');
}
}else{

header("location:index.php?pesan=gagal");
}

?>