<?php

$gk = 4500000;
$bpjs = 200000;
$infak = 50000;
$a = 10000;
$b = 24;

$pajak = $gk * 2.5;
$pajak /= 100;

$bonus = $a * $b;

$total = $gk - $infak - $pajak - $bpjs + $bonus;

echo "Gaji Kotor : Rp.$gk";
echo "<br>";
echo "<hr>";
echo "Pajak : Rp.$pajak";
echo "<br>";
echo "Infak : Rp.$infak";
echo "<br>";
echo "Bpjs : Rp.$bpjs";
echo "<br>";
echo "bonus : Rp.$bonus";
echo "<br>";
echo "<hr>";

echo "Total Gaji : Rp.$total";
echo "<br>";
echo ""
?>