<?php
$nama = "Ratna";
$status = "Sekretaris";
$keluarga = "1";
$lembur = "45000";
$lm_lembur = "35";
$trans = "35000";

echo "Nama : ".$nama."<br>"; 
echo "Status : ".$status."<br>";

if($status == "Manager"){
    $gaji = 4500000;
    echo "Gaji Pokok : ".$gaji;
}
else if($status == "Sekretaris"){
    $gaji = 3500000;
    echo "Gaji Pokok : ".$gaji;
}
echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : ".$bpjs."<br>";

$pajak = 0.025 * $gaji;
echo "Pajak : ".$pajak."<br>";

$potong = $bpjs + $pajak;
echo "Total Potongan : ".$potong."<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan : ".$tunjangan."<br>";

$Lembur = $lembur * $lm_lembur;
echo "Lembur : ".$Lembur."<br>";

$transport = $trans * 24;
echo "Transportasi : ".$transport."<br>";

$bonus = $tunjangan + $Lembur + $transport;
echo "Total Bonus : ".$bonus."<br>";

echo "<hr>";

$bersih = $gaji - $potong + $bonus;
echo "Gaji Bersih : ".$bersih."<br>";

