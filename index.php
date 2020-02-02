<?php
$x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$y = [100, 120, 110, 100, 150, 140, 140, 160, 150, 143, 145, 150];
regresionLineal($x, $y);
function regresionLineal($x, $y)
{
    $n = count($x);
    if (count($y) != $n) {
        die("Los elementos en x no coinciden con los elementos en y");
    }
    $sumaX = array_sum($x);
    $sumaY = array_sum($y);

    $sumaXporX = 0;
    $sumaXporY = 0;

    for ($i = 0; $i < $n; $i++) {
        $sumaXporX = $sumaXporX + ($x[$i] * $x[$i]);
        $sumaXporY = $sumaXporY + ($x[$i] * $y[$i]);
    }
    $w = (($n * $sumaXporY) - ($sumaX * $sumaY)) / (($n * $sumaXporX) - ($sumaX * $sumaX));
    $b = ($sumaY - ($w * $sumaX)) / $n;
    echo "w=$w <br>b=$b";
}
