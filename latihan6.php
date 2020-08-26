<?php

//struktur kendali percabangan
//pernyataan bersyarat yang menganalisa keadaan berdasarkan kondisi yang bernilai true/false
$nilai_a = 5;
$nilai_b = 3;

//Operator komprasi nya ==/>/</<=/>=/===/!==

// if ($nilai_b == $nilai_a){
//     echo "nilainya sama";
// } else {
//     echo "nilainya tidak sama";
// }

if ($nilai_b > $nilai_a){
    echo "nilai b lebih besar dari nilai a";
} else {
    echo "nilai b lebih kecil dari nilai a";
}