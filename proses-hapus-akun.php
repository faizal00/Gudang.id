<?php

include("config.php");

if(isset($_POST['hapus-akun'])){

    $id = $_POST['Id'];
    $sql = "DELETE FROM User WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: hapus-akun.php?pesan=hapus-akun');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>