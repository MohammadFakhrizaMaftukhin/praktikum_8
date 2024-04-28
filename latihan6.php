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
// while loop
$x = 10;
while ($x < 5) {
    echo "Nomor : $x<br>";
    $x--;
}

// do while
$x = 1;
do {
    echo "Nomor : $x <br>";
    $x++;
} while ($x <= 5);

// foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

// for
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor : $x <br>";
}

// for dengan break
for ($x = 0; $x <10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : : $x <br>";
}

?>
</body>
</html>