<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['masukan'])){

    // ambil data dari formulir
    $nama = $_POST['nam'];
    $kode = $_POST['kod'];
    $status = $_POST['sta'];
    $jumlah = $_POST['jum'];


    // buat query
    $sql = "INSERT INTO Barang  (Nama, Kode, Stat, Jumlah) VALUE ('$nama', '$kode', '$status', '$jumlah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: tambah.php?pesan=tambah');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: dashboard.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>