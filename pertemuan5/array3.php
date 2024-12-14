<?php
$mahasiswa = [
    ["dinaa", "05373733", "rekayasa perangkat lunak", "auliarahma813@gmail.com"],
    ["bunga", "04573888", "Teknik Jaringan", "fitria@gmail.com"],
    ["dosica","00837677", "Teknik industri","sicaaa@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

   <?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
   <li>Nama : <?= $mhs[0]; ?></li>
   <li>NRP : <?= $mhs[1]; ?></li>
   <li>Jurusan : <?= $mhs[2]; ?></li>
   <li>Email : <?= $mhs[3]; ?></li>
</ul>
 <?php endforeach; ?>   



</body>
</html>