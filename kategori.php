<?php
//memeriksa apakah variabel POST telah diisi
if (isset($_POST['nama']) && isset($_POST['tinggi']) && isset($_POST['berat'])) {
    //mengambil nilai variabel POST
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

    //menghitung nilai BMI
    $tinggi_m = $tinggi / 100; //mengubah tinggi dari cm menjadi m
    $bmi = $berat / pow($tinggi_m, 2);

    //menentukan kategori berat badan
    if ($bmi < 18.5) {
        $kategori = "kurus";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $kategori = "sedang";
    } else {
        $kategori = "gemuk";
    }

    //menampilkan hasil perhitungan
    echo "Halo, " . $nama . ". Nilai BMI anda adalah " . $bmi . ", anda termasuk " . $kategori . ".";
} else {
    //jika variabel POST tidak diisi, menampilkan pesan error
    echo "Mohon masukkan nilai yang valid.";
}
?>