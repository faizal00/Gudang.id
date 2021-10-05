<?php 
include 'config.php';
$username = $_POST['User'];
$password = $_POST['Pass'];
$role = $_POST['Role'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$rand.'_'.$filename);
		mysqli_query($db, "INSERT INTO User VALUES(NULL,'$username','$password','$xx','$role')");
        header("location:./login.php?pesan=berhasil");
	}else{
		header("location:login.php?pesan=gagak_ukuran");
	}
}