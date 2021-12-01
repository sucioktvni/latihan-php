<?php
if (isset($_POST['simpan'])) {
    
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    if ($jk == "Laki-Laki") {
        if ($tb < 170) {
            $d == "Maaf Ga Lulus";
        }
        else if ($tb > 170) {
            $d == "Selamat Lulus";
        }
    }
    if ($jk == "Perempuan") {
        if ($tb < 160) {
            $d == "Maaf Ga Lulus";
        }
        else if ($tb > 160) {
            $d == "Selamat Lulus";
        }
    }
    if ($jk == "Laki-Laki") {
        if ($bb < 90) {
            $d == "Maaf Ga Lulus";
        }
        else if ($bb > 90) {
            $d == "Selamat Lulus";
        }
    }
    if ($jk == "Laki-Laki") {
        if ($bb < 90) {
            $d == "Maaf Ga Lulus";
        }
        else if ($bb > 90) {
            $d == "Selamat Lulus";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Pendaftaran TNI/Polri</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Tingi Badan : <b><?php echo $tb; ?></b><br>
    Berat Badan : <b><?php echo $bb; ?></b><br>
</body>
</html>
<?php } ?>

