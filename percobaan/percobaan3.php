<?php
$film = [
    ["Tukang bubur naik haji", 9],
    ["Boboiboy", 3],
    ["Pada zaman dahulu", 1],
    ["Upin & Ipin", 7],
];
foreach ($film as $a) {
    if ($a[1]>=1) {
        echo "Film: $a[0], Rating: $a[1]<br>";
    }
}