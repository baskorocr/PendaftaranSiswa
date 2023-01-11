<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 

    // buat query
    $sql = "INSERT INTO users (username, password) VALUE ('$username', '$password')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin/index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: admin/index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>