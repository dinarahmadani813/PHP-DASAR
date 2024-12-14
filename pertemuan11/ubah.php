<?php
require 'function.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs= query("SELECT * FROM siswa WHERE id =$id")[0];



// cek apakah tombaol fdata sudah di tekan apa belum
if( isset($_POST["submit"])  ) {

    //cek apakah data berhasil di ubah atau tidak 
    if( isset($_POST["submit"]) )  {
        echo"
        <scipt>
        alert('data berhasil di ubah!');
        document.location.herf ='index.php';
        </script>
     ";
    }
    
}    
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
 </head>
 <body>
    <h1>ubah data mahasiswa</h1>

    <from action=""method="post">
        <input type="hideen" name ="id" value="<?=$_mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp"id="nrp" required value ="<?=$mhs["nrp"]; ?>">
</li>
<li>
    <label for="nama">Nama : </label>
    <input type="text" name="nama"id="nama"value="<?=$mhs["nama"]; ?>">
</li>
<li>
    <label for="email">Email : </label>
    <input type="text" name="email"id="email"value="<?= $mhs["nama"]; ?>">
</li>
<li>
<label for="email">Email : </label>
    <input type="text" name="jurusan"id="jurusan"value="<?= $mhs["jurusan"]; ?>">
</li>
<li>
<label for="email">Email : </label>
    <input type="text" name="gambar"id="gambar"value="<?= $mhs["gambar"]; ?>">
  </li>
<li> 
    <button type="submit"name="submit">Ubah Data!</button>
</li>
</ul>

</form>



 </body>
 </html>        

