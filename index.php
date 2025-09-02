<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nama="Rivan"?>
    <h1>Selamat Datang<br><?php echo $nama;?></h1>
    <h1><?php
    $nilai = 80;
    if ($nilai>=100) {
        echo "A+";
    }
    elseif ($nilai>=90) {
        echo "A";
    }
    elseif ($nilai>=80) {
        echo "B+";
    }
    else {
        echo "Tidak lulus";
    }
    ?></h1>
</body>
</html>