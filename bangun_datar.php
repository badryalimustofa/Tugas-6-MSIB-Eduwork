<?php
//fungsi untuk menghitung luas persegi
function luas_persegi($sisi)
{
    $luas = $sisi * $sisi;
    return $luas;
}

//fungsi untuk menghitung luas persegi panjang
function luas_persegi_panjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

//fungsi untuk menghitung luas segitiga
function luas_segitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

//fungsi untuk menghitung luas lingkaran
function luas_lingkaran($jari_jari)
{
    $luas = pi() * pow($jari_jari, 2);
    return $luas;
}

//fungsi untuk menghitung luas trapesium
function luas_trapesium($sisi_atas, $sisi_bawah, $tinggi)
{
    $luas = 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi;
    return $luas;
}

//memanggil fungsi untuk menghitung luas bangun datar
$luas_persegi = luas_persegi(10);
$luas_persegi_panjang = luas_persegi_panjang(5, 8);
$luas_segitiga = luas_segitiga(6, 10);
$luas_lingkaran = luas_lingkaran(4);
$luas_trapesium = luas_trapesium(8, 12, 5);

//menampilkan hasil perhitungan
echo "Luas Persegi = " . $luas_persegi . "<br>";
echo "Luas Persegi Panjang = " . $luas_persegi_panjang . "<br>";
echo "Luas Segitiga = " . $luas_segitiga . "<br>";
echo "Luas Lingkaran = " . $luas_lingkaran . "<br>";
echo "Luas Trapesium = " . $luas_trapesium . "<br>";
?>