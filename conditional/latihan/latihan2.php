<?php
$ipk = 2.3 ;

if ($ipk >= 0 && $ipk <= 2) {
    echo "Maaf, anda harus mengulang";
}
else if ($ipk >= 2.1 && $ipk <= 2.5) {
    echo "Maaf, anda harus memperbaiki nilai matkul";
}
else if ($ipk >= 2.5 && $ipk <=2.6)
{
    echo "Mau diperbaiki boleh, ga juga gpp";
}
else if ($ipk >= 3 && $ipk <= 3.5) {
    echo "Matkul anda baik";
}
else if ($ipk >= 3.5 && $ipk <= 4) {
    echo "Matkul anda ma'nyus";
}
else {
    echo "Sistem Error!";
}
?>