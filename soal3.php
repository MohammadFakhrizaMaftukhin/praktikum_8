<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Studi kasus 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$siswa = [
    ["nomor" => 1, "nama" => "Adi", "poin" => 75],
    ["nomor" => 2, "nama" => "Joni", "poin" => 80],
    ["nomor" => 3, "nama" => "Jihan", "poin" => 65],
    ["nomor" => 4, "nama" => "Aya", "poin" => 70],
    ["nomor" => 5, "nama" => "Ita", "poin" => 85],
    ["nomor" => 6, "nama" => "Budi", "poin" => 90],
    ["nomor" => 7, "nama" => "Tini", "poin" => 95],
    ["nomor" => 8, "nama" => "Sari", "poin" => 65],
];

foreach ($siswa as $s) {
    if ($s["nomor"] == 5) {
        echo "Poin siswa dengan nomor urut 5 adalah : " . $s["poin"] . "<br>";
    }
}

foreach ($siswa as $s) {
    if ($s["poin"] == 90) {
        echo "Nama siswa dengan poin 90 adalah : " . $s["nama"] . PHP_EOL . "<br>";
        break;
    }
}

foreach ($siswa as $s) {
    if ($s["poin"] == 100) {
        echo "Nama siswa dengan poin 100 adalah : " . $s["nama"] . "<br>";
    } else {
        echo "Tidak ada siswa dengan poin 100.<br>";
        break;
    }
}

?>
</body>
</html>