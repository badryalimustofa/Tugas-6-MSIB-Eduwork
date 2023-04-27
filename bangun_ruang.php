<?php
//fungsi untuk menghitung volume kubus
function volume_kubus($sisi)
{
    $volume = pow($sisi, 3);
    return $volume;
}

//fungsi untuk menghitung volume balok
function volume_balok($panjang, $lebar, $tinggi)
{
    $volume = $panjang * $lebar * $tinggi;
    return $volume;
}

//fungsi untuk menghitung volume bola
function volume_bola($jari_jari)
{
    $volume = (4 / 3) * pi() * pow($jari_jari, 3);
    return $volume;
}

//memanggil fungsi untuk menghitung volume bangun ruang
$volume_kubus = volume_kubus(5);
$volume_balok = volume_balok(4, 6, 8);
$volume_bola = volume_bola(3);

//menampilkan hasil perhitungan
echo "Volume Kubus = " . $volume_kubus . "<br>";
echo "Volume Balok = " . $volume_balok . "<br>";
echo "Volume Bola = " . $volume_bola . "<br>";
?>