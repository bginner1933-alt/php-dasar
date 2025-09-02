<?php
$stokbarang = [
    ["nama" => "Buku tulis", "Stok" => 3],
    ["nama" => "Pensil", "Stok" => 10],
    ["nama" => "Pulpen", "Stok" => 2],
    ["nama" => "Penggaris", "Stok" => 7],
    ["nama" => "Penghapus", "Stok" => 4],
];

foreach ($stokbarang as $barang) {
    if ($barang["Stok"] < 5) {
        echo "<br>";
        echo $barang["nama"] . " Stok: " . $barang["Stok"] ;
    }    
}

