<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Studi kasus 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;

$gajiKotor = $gajiPokok + $tunjanganJabatan;

$pajakPenghasilan = 0.1 * $gajiKotor;

$gajiBersih = $gajiKotor - $pajakPenghasilan;

echo "Gaji Bersih Obi setiap bulan: Rp. " . number_format($gajiBersih, 0, ',', '.') . ",-";

?>
</body>
</html>