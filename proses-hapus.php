<?php

include("config.php");

if(isset($_POST['hapus'])){

    $id = $_POST['id'];
    $jumlah = $_POST['jml'];
    $sql = "DELETE FROM Barang WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: hapus.php?pesan=hapus');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>