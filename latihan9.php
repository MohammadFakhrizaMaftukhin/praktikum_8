<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Function PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php

//contoh fungsi
function writeMsg($nama) {
    echo "selamat datang ". $nama." <br>";
}
writeMsg("Ahmad");

function tambah(int $angka1, int $angka2) {
    $a= $angka1+$angka2;
    return $a;
}
$hasil=tambah(5, 5);
echo ($hasil);

?>
</body>
</html>