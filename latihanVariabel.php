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
$nama_hari = array(
    "Minggu",
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumat",
    "Sabtu"
);

for ($i = 0; $i < count($nama_hari); $i++) {
    echo "Hari ke-" . ($i + 1) . ": " . $nama_hari[$i] . "<br>";
}

?>
</body>
</html>