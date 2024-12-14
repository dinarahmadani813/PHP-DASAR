<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"])) : ?>
    <h1> halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php endif; ?>
     
     <from action="latihan4.php"method="get">
        masukkan nama :
        <input type="text" nama="nama">
        <br>
        <button type="submit">Kirim</button>
        </form>
    ?>
    
</body>
</html>