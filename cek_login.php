<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['User'];
$password = $_POST['Pass'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from User where User='$username' and Pass='$password'");
$dataa = mysqli_fetch_array ($data);
//  var_dump ($dataa);exit;
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['User'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['Id'] = $dataa[0]['Id'];
	
	if($_SESSION["Role"]=$dataa["Role"]==Admin){
		header("location:dashboard.php");	
	}
	else{
		header("location:dashboard_user.php");
	}
}
else{
	header("location:login.php?pesan=gagal");
}
?>


