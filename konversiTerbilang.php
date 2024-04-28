<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Terbilang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$angka = 1;

switch ($angka) {
    case 1:
        $terbilang = "satu";
        break;
    case 2:
        $terbilang = "dua";
        break;
    case 3:
        $terbilang = "tiga";
        break;
    case 4:
        $terbilang = "empat";
        break;
    case 5:
        $terbilang = "lima";
        break;
    case 6:
        $terbilang = "enam";
        break;
    case 7:
        $terbilang = "tujuh";
        break;
    case 8:
        $terbilang = "delapan";
        break;
    case 9:
        $terbilang = "sembilan";
        break;
    default:
        $terbilang = "Angka di luar rentang yang diizinkan.";
        break;
}

echo "Angka " . $angka . " dalam huruf adalah: " . $terbilang;

?>

</body>
</html>