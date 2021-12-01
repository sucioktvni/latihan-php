<?php
$s=5;
for($a=1; $a<=$s; $a++) {
    for($b=1; $b<=$a; $b++) {
        echo "&nbsp";
    }
    for($c=$s; $c>=$a; $c-=1) {
        echo "*";
    }
    echo "<br>";
}
?>