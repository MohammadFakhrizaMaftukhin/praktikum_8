<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Studi kasus 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php
$totalUang = 1387500;

$pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

$banyakPecahan = array_fill(0, count($pecahanUang), 0);

foreach ($pecahanUang as $key => $nilai) {
    $banyakPecahan[$key] = floor($totalUang / $nilai);
    $totalUang -= $banyakPecahan[$key] * $nilai;
}

echo "Banyaknya masing-masing pecahan uang yang diperoleh Ani dari Bank:\n";
foreach ($pecahanUang as $key => $nilai) {
    echo "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $banyakPecahan[$key] . " lembar\n";
}
?>

</body>
</html>