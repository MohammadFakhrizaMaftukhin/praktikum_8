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
/* Operator logika yang bisa digunakan
* ==    Sama dengan                     $x == $y
* ===   Identical                       $x === $y
* !=    Tidak sama dengan               $x != $y
* <>    Tidak sama dengan               $x <> $y
* !==   Not identical                   $x !== $y
* >     Lebih besar dari                $x > $y
* <     Kurang dari                     $x < $y
* >=    Lebih besar atau sama dengan    $x >= $y
* <=    Kurang dari atau sama dengan    $x <= $y
* <=>   Spaceship                       $x <=> $y
*/

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "If <br>";
if ($t < 16) {
    echo "Selamat Siang!";
}

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> If dan Else <br>";
if($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}

$t = date("H"); // mendapatkan jam dengan format 1-24
echo"<br> Nested If <br>";
if ($t < 12) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}

?>
</body>
</html>