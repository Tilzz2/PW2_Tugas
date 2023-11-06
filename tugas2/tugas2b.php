<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            margin: 5px;
            float: left;
            text-align: center;
            line-height: 50px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php
$jumlah_baris = 5;
$jumlah_kolom = 5;

for ($i = 1; $i <= $jumlah_baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="kotak">' . $j . '</div>';
    }
    echo '<div class="clear"></div>';
}
?>
</body>
</html>
