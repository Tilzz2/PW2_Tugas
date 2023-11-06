<?php
function faktorial($a) {
    if ($a === 0) {
        return 1; // Faktorial dari 0 adalah 1
    } else {
        return $a * faktorial($a- 1);
    }
}

$angka = 5;
$hasil = faktorial($angka);

echo "Faktorial dari {$angka} adalah {$hasil}";
?>

