<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Operator PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");

//Assignment operators
$x +=2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x ".$x."<br>";
echo "Penambahan y ".$y."<br>";
echo ("<br>");

//Increment/Decrement operators
echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi ++x = ".$x."<br>";
echo ("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo ("<br>");

//Conditional assignment operatord
$user ="Andi darmawan";
// <kondisi> / <nilai_jika kondisi_true ; <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi ";
echo $status."<b>";
// variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

?>
</body>
</html>