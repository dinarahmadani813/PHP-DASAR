<?php
$mahasiswa = [
    ["dina aulia r", "0077768556","dinaaulia34455@gmail.com", "teknik informatika"],
    ["antika ines", "0088812345","inessantika2334@gmail.com", "teknik informatika"],
];

$mahasiswa = [
[
    "nama" => "dina aulia", 
    "NISN" => "0077768556", 
    "email" => "dinaaulia3455@gmail.com",
    "Jurusan" => "teknik informatika",
    "gambar" => "foto1.jpg"
],
[
    "nama" => " antika ines ", 
    "NISN" => "0088812345", 
    "email" => "inessantika2334@gmail.com",
    "Jurusan" => "teknik informatika",
    "gambar" => "foto2.jpg"
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?> 
    <ul>
        <li>
            <img src="img/foto1.jpg<?= $mhs["gambar"]; ?>"> 
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NISN : <?= $mhs["NISN"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>