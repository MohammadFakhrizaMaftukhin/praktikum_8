<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perulangan PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $number) {
    if ($number % 2 == 0) {
        echo $number . " Genap.<br>"; 
    } else {
        echo $number . " Ganjil.<br>";
    }
}
?>

</body>
</html>