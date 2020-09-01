<?php

//Struktur kendali percabangan (IF)
//PERNYATAAN Bersyarat yang menganalisa keadaan berdasarkan kondisi yang benilai TRUE/FALSE\\
$nilai_a = 30;
$nilai_b = 20;

if ($nilai_a == $nilai_b) {
    echo "Nilai Sama";
} else {
    echo "Nilai Tidak Sama";
}

echo "<br>";

if ($nilai_b > $nilai_a) {
    echo "nilai_b Lebih besar dari nilai_a";
} else {
    echo "nilai_b Lebih kecil dari nilai_a";
}
