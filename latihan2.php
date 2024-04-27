<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Variabel PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
//variabel dalam php
$txt = "Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi variabel txt adalah: $txt</p>" ;
echo "<p>isi variabel x adalah: $x</p>" ;
echo "<p>isi variabel y adalah: $y</p>" ;
echo "Belahjar PHP di " . $txt2 . "<br>";
echo $x + $y;

// PHP konstanta
define("nama_konstanta", "Mohammad Fakhriza Maftukhin");
echo "<br>".nama_konstanta;

?>
</body>
</html>