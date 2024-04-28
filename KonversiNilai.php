<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
function konversiNilai($nilai) {
    if ($nilai >= 0 && $nilai <= 59) {
        return "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        return "BC";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        return "B";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        return "AB";
    } elseif ($nilai >= 90 && $nilai <= 100) {
        return "A";
    } else {
        return "Nilai diluar rentang 0-100";
    }
}

$nilai = 85;
echo "Nilai: " . $nilai . " => Konversi: " . konversiNilai($nilai);
?>

</body>
</html>