<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1</title>
</head>

<body>
    <!-- Cú pháp : xử lý dữ liệu ở đâu, thì nhúng php vào đấy -->
    <?php
    // Xuất nội dung ra ngoài trình duyệt
    echo "DuogBachDev";
    echo "<h1>DuogBachDev</h1>";

    /**
        1. Biến
        
            $ten_bien;
            VD :  $a, $_ ,........
                  $so_nguyen;
                  $so_thuc = 3.14;        
            echo $so_thuc;

        2. Kiểu dữ liệu

            Interger, Double, String, Boolean, Array, Object

        3. Toán tử

            - Số học :
                VD : 
                $st1 = 10;
                $st2 = 3;
                $kq  = $st1 + $st2;
                $kq1 = $st1 - $st2;
                $kq2 = $st1 * $st2;
                $kq3 = $st1 / $st2;
                $kq4 = $st1 % $st2;
            - Gán : 
                VD : $ten_bien = 10;
            - Nối :
                VD : 
                $ten_bien = 10;
                echo "Đây là số".$ten_bien;
            - So sánh
                ==, != , ===, <, >, <=, >=, &&, ||, Or,Xor, And, !
            - Logic
            - Kết hợp
                ++,--, +=, -=, *=, %=, /=
                $a = 10;
                $a++; //$a = $a + 1;
                $a--; //$a = $a - 1;

     **/
    // $so_thuc = 3.14;
    // echo $so_thuc;

    // $bt = 10 > 5;
    // echo $bt;
    ?>
</body>

</html>