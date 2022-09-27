<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    
    $id = $_GET['id'];


    $sql = "DELETE FROM barang WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: barang.php?status=sukses');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>