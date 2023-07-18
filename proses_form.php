<?php

include("config.php");


if(isset($_POST['submit'])){

 
    $nama = $_POST['nama'];
    $alamat = $_POST['email'];
    $tl = $_POST['tanggal_lahir'];
    $kota = $_POST['kota'];
    $jk = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO data (nama, email, tanggal_lahir, kota, jenis_kelamin) VALUE ('$nama', '$email', '$tl', '$kota', '$jk')";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
       
        header('Location: coba.php?status=sukses');
    } else {
        
        header('Location: coba.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>