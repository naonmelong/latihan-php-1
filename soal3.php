<?php
for ($i=1; $i <= 10; $i++) {
    for ($j=1; $j <= 10; $j++) {
        $d = $i*$j;
        echo '<br>';
        if ($i % 2 == 1) {
            echo "$i X $j = $d Bilangan ganjil";
        }else{
            echo "$i X $j = $d  Bilangan Genap";
        }
    }
}