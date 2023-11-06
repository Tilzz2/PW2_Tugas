<?php

$perusahaan_teknologi = array(
    array(
        'Gambar' => 'gambar/google.jpg',
        'Nama' => 'Google',
        'Lokasi' => 'Mountain View, California',
        'Tahun Berdiri' => 1998,
        'Pendiri' => 'Larry Page, Sergey Brin',
        'Penghasilan Tahunan' => '$182.53 miliar',
    ),
    array(
        'Gambar' => 'gambar/apple.jpeg',
        'Nama' => 'Apple',
        'Lokasi' => 'Cupertino, California',
        'Tahun Berdiri' => 1976,
        'Pendiri' => 'Steve Jobs, Steve Wozniak, Ronald Wayne',
        'Penghasilan Tahunan' => '$394.53 miliar',
    ),
    array(
        'Gambar' => 'gambar/microsoft.jpeg',
        'Nama' => 'Microsoft',
        'Lokasi' => 'Redmond, Washington',
        'Tahun Berdiri' => 1975,
        'Pendiri' => 'Bill Gates, Paul Allen',
        'Penghasilan Tahunan' => '$168.09 miliar',
    ),
    array(
        'Gambar' => 'gambar/amazon.jpeg',
        'Nama' => 'Amazon',
        'Lokasi' => 'Seattle, Washington',
        'Tahun Berdiri' => 1994,
        'Pendiri' => 'Jeff Bezos',
        'Penghasilan Tahunan' => '$386.06 miliar',
    ),
    array(
        'Gambar' => 'gambar/facebook.webp',
        'Nama' => 'Facebook',
        'Lokasi' => 'Menlo Park, California',
        'Tahun Berdiri' => 2004,
        'Pendiri' => 'Mark Zuckerberg, Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, Chris Hughes',
        'Penghasilan Tahunan' => '$70.7 miliar',
    ),
    array(
        'Gambar' => 'gambar/intel.jpeg',
        'Nama' => 'Intel',
        'Lokasi' => 'Santa Clara, California',
        'Tahun Berdiri' => 1968,
        'Pendiri' => 'Robert Noyce, Gordon Moore',
        'Penghasilan Tahunan' => '$79.6 miliar',
    ),
    array(
        'Gambar' => 'gambar/acer.jpeg',
        'Nama' => 'Acer',
        'Lokasi' => 'New Taipei, Taiwan',
        'Tahun Berdiri' => 1976,
        'Pendiri' => 'Stan Shih, Carolyn Yeh, George Huang',
        'Penghasilan Tahunan' => '$6.33 miliar',
    ),
    array(
        'Gambar' => 'gambar/sony.jpeg',
        'Nama' => 'Sony',
        'Lokasi' => 'Tokyo, Jepang',
        'Tahun Berdiri' => 1946,
        'Pendiri' => 'Masaru Ibuka, Akio Morita',
        'Penghasilan Tahunan' => '$82.29 miliar',
    ),
    array(
        'Gambar' => 'gambar/canon.jpeg',
        'Nama' => 'Canon',
        'Lokasi' => 'Tokyo, Jepang',
        'Tahun Berdiri' => 1937,
        'Pendiri' => 'Takeshi Mitarai, Goro Yoshida, Saburo Uchida, Takeo Maeda',
        'Penghasilan Tahunan' => '$30.16 miliar',
    ),
    array(
        'Gambar' => 'gambar/nvidia.jpeg',
        'Nama' => 'Nvidia',
        'Lokasi' => 'Santa Clara, California',
        'Tahun Berdiri' => 1993,
        'Pendiri' => 'Jensen Huang, Chris Malachowsky, Curtis Priem',
        'Penghasilan Tahunan' => '$16.68 miliar'
    ),
    
    
    
);


echo "<table border='1'>";
echo "<tr><th>Gambar</th><th>Nama</th><th>Lokasi</th><th>Tahun Berdiri</th><th>Pendiri</th><th>Penghasilan Tahunan</th></tr>";
foreach ($perusahaan_teknologi as $perusahaan) {
    echo "<tr>";
    echo "<td><img src='" . $perusahaan['Gambar'] . "' width='200' height='200'></td>";
    echo "<td>" . $perusahaan['Nama'] . "</td>";
    echo "<td>" . $perusahaan['Lokasi'] . "</td>";
    echo "<td>" . $perusahaan['Tahun Berdiri'] . "</td>";
    echo "<td>" . $perusahaan['Pendiri'] . "</td>";
    echo "<td>" . $perusahaan['Penghasilan Tahunan'] . "</td>";
    echo "</tr>";
}
echo "</table>";


?>
