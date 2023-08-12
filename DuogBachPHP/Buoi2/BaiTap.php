<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuogBachDev</title>
</head>

<body>
    <?php
    // Tính tổng chẵn, tổng lẻ từ 1-50 (sử dụng vòng lặp)
    $sumChan = 0;
    $sumLe = 0;
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            $sumChan += $i;
        } else {
            $sumLe += $i;
        }
    }
    echo "Tổng chẵn : " . $sumChan;
    echo "Tổng lẻ : " . $sumLe;
    ?>
</body>

</html>