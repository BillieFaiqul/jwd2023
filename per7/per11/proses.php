<?php

include("koneksi.php");


if(isset($_POST['submit'])){

 
    $no = $_POST['nomer'];
    $merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO printer (nomer, nama_merek, warna, jumlah) VALUE ('$no', '$merek', '$warna', '$jumlah')";
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