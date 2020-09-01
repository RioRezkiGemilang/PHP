<?php

// Latihan Array
$jurusan = array("RPL", "TKJ", "KR", "AP", "PH");
// prin_r($jurusan); untuk memlihatkan key/indexnya nya(id) 
// print_r($jurusan);

// echo $jurusan[2];
$jurusan = array(
    "RPL" => "Rekayasa Perangkat Lunak",
    "TKJ" => "Teknik Komputer Jaringan"
);

echo $jurusan['TKJ'];
