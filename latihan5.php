<?php

// Operator Aritmatika
$nilai_a = 10;
$nilai_b = 20;

// Penjumlahan
$total = $nilai_a + $nilai_b;

// Hasil
echo "<br> Total dari $nilai_a + $nilai_b =";
echo ($total);

$nilai_a = 10;
$nilai_b = 18;

// Perkalian
$total = $nilai_a * $nilai_b;

// Hasil
echo "<br> Total dari $nilai_a x $nilai_b =";
echo $total;

// Akar dan Pembulatan
$nilai_a = 10;
$nilai_b = 20;

// sqrt berfungsi untuk akar
echo "<br> akar dari 10 =";
echo sqrt($nilai_a);
echo "<br> akar dari 20 =";
echo sqrt($nilai_b);
echo "<br>";
$akar_a = sqrt($nilai_a);
$akar_b = sqrt($nilai_b);
echo "Pembulatan ke Atas : ceil() : " . ceil($akar_a);
echo "<br>";
echo "Pembulatan ke Bawah : floor() : " . floor($akar_b);
