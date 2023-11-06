
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr>
                <th>kolom1</th>
                <th>kolom1</th>
                <th>kolom1</th>
                <th>kolom1</th>
                 <th>kolom1</th>
            </tr>
        
        
        
        <?php
$baris = 15;
$kolom = 5;

for ($i = 1; $i <= $baris; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $kolom; $j++) {
        echo "<td>Baris " . $i . ", Kolom " . $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</table>  
    </body>
    </html>



