<?php
$jawabanIsset = "Isset adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur dan memiliki nilai. <br><br>";
$jawabanEmpty = "Empty adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel kosong.";

function tampilkanJawaban($style, $issetText, $emptyText) {
    echo '<div style="' . $style . '">';
    echo $issetText;
    echo $emptyText;
    echo '</div>';
}

$style = "font-size: 16px; color: #333;";

tampilkanJawaban($style, $jawabanIsset, $jawabanEmpty);
?>
