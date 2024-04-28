<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . "." . "<br>";

// tampilkan mangga
echo "saya suka " . $namaBuah[1] . "<br>";
// tampilkan jeruk
echo "saya suka " . $namaBuah[2] . "<br>";
// tampilkan apel
echo "saya suka " . $namaBuah[3] . "<br>";
// tampilkan melon
echo "saya suka " . $namaBuah[4] . "<br>";

// array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"36 Tahun");
$umur['ahmad']="50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'] . "<br>";
echo "Umur Ben adalah " . $umur['Ben'] . "<br>";
echo "Umur Joe adalah " . $umur['Joe'] . "<br>";
echo "Umur Ahmad adalah " . $umur['ahmad'] . "<br>";

?>
</body>
</html>