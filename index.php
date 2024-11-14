<?php
// Input umur
$umur = 25; // Contoh umur

// Menggunakan IF
echo "Menggunakan IF:\n";
if ($umur < 13) {
    echo "Kategori: Anak-anak\n";
}

// Menggunakan IF/ELSE
echo "\nMenggunakan IF/ELSE:\n";
if ($umur < 13) {
    echo "Kategori: Anak-anak\n";
} else {
    echo "Kategori: Bukan Anak-anak\n";
}

// Menggunakan SWITCH CASE
echo "\nMenggunakan SWITCH CASE:\n";
switch (true) {
    case ($umur < 13):
        echo "Kategori: Anak-anak\n";
        break;
    case ($umur >= 13 && $umur <= 19):
        echo "Kategori: Remaja\n";
        break;
    case ($umur >= 20 && $umur <= 59):
        echo "Kategori: Dewasa\n";
        break;
    case ($umur >= 60):
        echo "Kategori: Lansia\n";
        break;
    default:
        echo "Kategori: Tidak diketahui\n";
}
?>
