<?php
$siswa = [
    ['nama' => 'Sumi' , 'jk' => 'Perempuan' , 'umur' => '16'],
    ['nama' => 'Yuli' , 'jk' => 'Perempuan' , 'umur' => '17'],
    ['nama' => 'rizki' , 'jk' => 'Laki-Laki' , 'umur' => '17'],
];

foreach ($siswa as $value) {
    echo "Nama :" . $value['nama'] . "<br>";
    echo "Jenis Kelamin :" . $value['jk'] . "<br>";
    echo "Umur :" . $value['umur'] . "<br>";
    echo "<hr>";
}
?>