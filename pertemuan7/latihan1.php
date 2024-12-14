<?php
// $_GET
var_dump($_GET);
$mahasiswa = [
    [
    "nama" => "dina aulia",
    "nrp" => "043040023",
    "email" => "dina aul@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "ramadhani",
        "nrp" => "033040001",
        "email" => "ramadhani@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "foto2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1> 
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
    <?php endforeach; ?>  
</ul>  
</body>
</html>