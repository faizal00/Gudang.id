<?php

include("config.php");

if(isset($_POST['kirim'])){

    $id = $_POST['id'];
    $jumlah = $_POST['jml'];

    if($jumlah == 0){
        $status = 'Sold';
    }else{
        $status = 'Ready';
    }


    $sql = "UPDATE Barang SET Stat='$status' , Jumlah='$jumlah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: kirim.php?pesan=edit');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>