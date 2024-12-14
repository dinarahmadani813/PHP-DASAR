<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum 
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil di tambahkan!');
            document.location.href = 'index.php';
     </script>
     ";
    } else {
        echo "
        <script>
            alert('data gagal di tambahkan!');
            document.location.href = 'index.php';
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
    <title> Tambah data mahasiswa </title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <from action=""method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type ="text" name="nrp"id="nrp required>
</li>
<li>
<label fore="nama">Nama :</label> : 
    <input type ="text" name="email" id="email">
</li>
<li>
    <label for="gamabar">gamabar : </label>
    <input type="text" name="gambar"id=gambar">
</li>
<li>
    <button type="submit" name="submit">Tambah Data</button>
</li>
</ul>

</form>

    
</body>
</html>