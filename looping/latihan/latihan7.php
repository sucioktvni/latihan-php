<?php
$no=5;
for($a=$no; $a>0;$a--) {
    for($i=1; $i<=$a; $i++) {
        echo "&nbsp";
    }
    for($a1=$no;$a1>=$a;$a1--) {
        echo"*";
    }
    echo "<br>";
}