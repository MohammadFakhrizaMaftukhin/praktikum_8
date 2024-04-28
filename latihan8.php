<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multidimensional Array PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311018">
    <meta name="author" content="Mohammad Fakhriza Maftukhin">
</head>
<body>
<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" =>array("Udin", "ismail", "adi"),
    "1D" =>array("lukman", "fajri", "mahmud")
);
// menampilkan data array
print_r($array);
// menampilkan kelas 1C
print_r($array['1C']);
// menampilkan kelas 1d dengan index 0
echo $array['1D'][0];
// tampilkan fajri
echo $array['1D'][1];
// tampilkan andi
echo "Andi tidak ada di data";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1C" =>["Udin", "ismail", "adi"],
    "1D" =>["lukman", "fajri", "mahmud"]
];

?>
</body>
</html>