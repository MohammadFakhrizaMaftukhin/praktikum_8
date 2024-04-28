<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Switch Statement PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php

$warna = "merah";
switch ($warna) {
    case "merah":
        echo "warna adalah merah";
        break;
    case "kuning":
        echo "warna adalah kuning";
        break;
    case "hijau":
        echo "warna adalah hijau";
        break;
    default:
        echo "warna tidak dikenal!";
}
echo "<br>";

?>
</body>
</html>