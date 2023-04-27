<?php

// variable untuk menyimpan jumlah baris
$rows = 5;

// loop untuk membuat baris
for ($i = 1; $i <= $rows; $i++) {

    // loop untuk membuat angka pada setiap kolom
    for ($j = 1; $j <= $i; $j++) {
        echo $j . ' ';
    }

    // membuat baris baru setelah setiap loop selesai
    echo '<br>';
}