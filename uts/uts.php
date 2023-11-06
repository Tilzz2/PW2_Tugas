<?php

$tabel_harga_barang = array(
    1 => array("Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000, "Jumlah" => 0),
    2 => array("Produk" => "Diapers", "Stok" => 15, "Harga" => 51000, "Jumlah" => 0),
    3 => array("Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000, "Jumlah" => 0),
    4 => array("Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000, "Jumlah" => 0),
    5 => array("Produk" => "Bedak", "Stok" => 15, "Harga" => 15000, "Jumlah" => 0),
    6 => array("Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500, "Jumlah" => 0),
    7 => array("Produk" => "Jumper", "Stok" => 25, "Harga" => 50000, "Jumlah" => 0)
);


$total_jumlah = 0;
$total_pembelian = 0;

foreach ($tabel_harga_barang as $key => $produk) {
    $tabel_harga_barang[$key]['Jumlah'] = $produk['Stok'] * $produk['Harga'];
    $total_jumlah += $produk['Jumlah'];
}



//  hasil
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($tabel_harga_barang as $key => $produk) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>{$produk['Produk']}</td>";
    echo "<td>{$produk['Stok']}</td>";
    echo "<td>{$produk['Harga']}</td>";
    echo "<td>{$produk['Jumlah']}</td>";
    echo "</tr>";
}
echo "</table>";





$tanggal_transaksi = "06 November 2023";


$produk_dibeli = array(
    array("Produk" => "Baju Bayi", "Jumlah" => 1, "Harga" => 35500),
    array("Produk" => "Diapers", "Jumlah" => 3, "Harga" => 51000),
    array("Produk" => "Bedak", "Jumlah" => 1, "Harga" => 15000),
    array("Produk" => "Minyak Telon", "Jumlah" => 2, "Harga" => 30000)
);

// Hitung total pembelian
$total_pembelian = 0;

foreach ($produk_dibeli as $produk) {
    $total_pembelian += $produk["Jumlah"] * $produk["Harga"];
}

// Diskon
$diskon = 0;
if ($total_pembelian >= 200000) {
    $diskon = 0.20;
} elseif ($total_pembelian >= 150000) {
    $diskon = 0.10;
}

//  total pembayaran setelah diskon
$total_pembayaran_setelah_diskon = $total_pembelian - ($total_pembelian * $diskon);


echo "<h2>Tanggal Transaksi: $tanggal_transaksi</h2>";

echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Jumlah</th></tr>";
foreach ($produk_dibeli as $produk) {
    echo "<tr>";
    echo "<td>{$produk['Produk']} ({$produk['Jumlah']}X" . number_format($produk['Harga'], 0, '.', ',') . ")</td>";
    echo "<td>" . number_format($produk['Jumlah'] * $produk['Harga'], 0, '.', ',') . "</td>";
    echo "</tr>";
}
echo "<tr><th>Total:</th><td>" . number_format($total_pembelian, 0, '.', ',') . "</td></tr>";
echo "<tr><th>Diskon:</th><td>" . number_format($diskon * 100, 0) . "%</td></tr>";
echo "<tr><th>Total Pembayaran:</th><td>" . number_format($total_pembayaran_setelah_diskon, 0, '.', ',') . "</td></tr>";
echo "</table>";


?>
