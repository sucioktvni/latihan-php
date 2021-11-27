<?php
$helm = "n";
$stnk = "n";
$sim = "n";

if ($helm == "y" && $stnk == "n" && $sim == "n") {
    echo "Kami cek perlengkapan surat STNK dan SIM Anda";
}
elseif ($helm == "y" && $stnk == "y" && $sim == "n") {
    echo "Surat lengkap, boleh kami cek SIM nya?";
}

elseif ($helm == "y" && $stnk == "y" && $sim == "y") {
    echo "Selamat berkendara, hati hati dijalan";
}
else {
    echo "Anda kami tilang!";
}