<?php

// variable untuk menyimpan jumlah baris
$rows = 5;

// loop untuk membuat baris
for ($i = 1; $i <= $rows; $i++) {

    // loop untuk membuat bintang pada setiap kolom
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }

    // membuat baris baru setelah setiap loop selesai
    echo '<br>';
}