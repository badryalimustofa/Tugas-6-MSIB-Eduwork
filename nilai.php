<?php
//memeriksa apakah variabel POST telah diisi
if (isset($_POST['nilai'])) {
    //mengambil nilai variabel POST
    $nilai = $_POST['nilai'];

    //menentukan kategori nilai
    if ($nilai >= 90 && $nilai <= 100) {
        $kategori = "A";
    } elseif ($nilai >= 80 && $nilai < 90) {
        $kategori = "B";
    } elseif ($nilai >= 70 && $nilai < 80) {
        $kategori = "C";
    } else {
        $kategori = "D";
    }

    //menampilkan hasil perhitungan
    echo "Nilai anda adalah " . $nilai . ", kategori nilai anda adalah " . $kategori . ".";
} else {
    //jika variabel POST tidak diisi, menampilkan pesan error
    echo "Mohon masukkan nilai yang valid.";
}
?>