<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập</title>
</head>

<body>
    <?php
    // $a = 10;
    // $b = $a++; //Gán trước rồi mới thực thi sau : b = 10 --> a = 11
    // $c = ++$a; //Thực thi trước rồi mới gán : a = 11 --> b = 11
    // echo $b;
    // echo $c;

    // Tìm dãy chữ số TUVXYZ biết mỗi chữ cái là kết quả của các phép toán dưới đây
    // Không chạy code mà nhẩm bằng đầu
    $a = 5;
    $b;
    $c;
    $d;
    echo $a; // a = 5
    echo $a++;  // a = 5 --> a = 6
    $b = $a--;  // b = 6 --> a = 5
    echo $b;    // b = 6 
    $c = ++$a; // a = 6 --> c = 6
    echo $c; // c = 6
    $d = --$a + --$b; // a = 5 + b = 5 --> d = 10
    echo $d; // d = 10
    $a += $d; // a = 5 + d = 10 --> a = 15
    echo $a; // a = 15
    ?>
</body>

</html>