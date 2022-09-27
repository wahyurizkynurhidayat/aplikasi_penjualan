<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: barang.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM barang WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   </head>
   <body>
       <h1>From Edit Barang</h1>
       <from action="proses-edit-barang.php" method="POST">
       <from>
           <fieldset>
            <input type="hiden" name="id" value="<?php echo $barang['id']?>"/>
               <p>
                   <label for="nama">Nama Barang :</label>
                   <input type="text" value="<?php echo $barang['nama']?>"/>
               </p>
               <p>
                   <label for="stok">Stok Barang :</label>
                   <input type="number" value="<?php echo $barang['stok']?>"/>
               </p>
               <p>
                   <label for="harga">Harga Barang :</label>
                   <input type="text" Value="<?php echo $barang['harga']?>" />
               </p>
               <p>
                   <input type="submit" value="Simpan" name="simpan" />
               </P>
           </fieldset>
       </from>
   </body>
</html>  
