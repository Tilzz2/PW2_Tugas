<?php
function ganti_style($tulisan, $kelas) {
    $style = 'style="font-size: 28px; 
    font-family: arial; color: #181ce1; 
    font-style: italic; 
    font-weight: bolder;"';
    return '<span class="' . $kelas . '" ' . $style . '>' . $tulisan . '</span>';
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";
echo ganti_style($tulisan, $kelas);
?>
