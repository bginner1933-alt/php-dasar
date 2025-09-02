<?php
$nyawa = 3;
//      while
echo "Game masih bejalan<br>";
while ($nyawa >= 1) {
    
    echo " nyawa: $nyawa<br>";

    $nyawa--;
}
echo "Game Over<br><hr>";
//      do while
$nyawa=3;
do {
    echo "Game masih bejalan<br>";
    $nyawa--;
} while ($nyawa >= 1);
echo "Game over";