<?php
$siswa = [
    "Andi" => 80,
    "Budi" => 70,
    "Citra" => 90,
    "Dadan" => 80,
    "Heri" => 80,
];
 echo "Hasil kelulusan siswa:";

 foreach ($siswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "<br>";

        echo "- $nama: Lulus (Nilai: $nilai)";
    }
    else {
        echo "<br>";

        echo "- $nama: Tidak Lulus (Nilai: $nilai)";
    }
 }