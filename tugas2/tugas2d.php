<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kategori Bilangan</title>
</head>
<body>
<?php
$mulai = 1; // Nilai awal
$akhir = 20; // Nilai akhir

for ($i = $mulai; $i <= $akhir; $i++) {
    echo "Angka $i adalah ";
    
    if ($i % 2 == 0) {
        echo "genap, ";
    } else {
        echo "ganjil, ";
    }

    // Cek apakah bilangan prima
    $prima = true;
    if ($i <= 1) {
        $prima = false;
    } else {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $prima = false;
                break;
            }
        }
    }

    if ($prima) {
        echo "sekaligus bilangan prima";
    } else {
        
    }

    echo "<br>";
}
?>
</body>
</html>
