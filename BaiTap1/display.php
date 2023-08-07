<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuogBachDev</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="root">
        <?php
        $hoten = $_POST["hoten"];
        $email = $_POST["email"];
        $sdt = $_POST["sdt"];
        $diachi = $_POST["diachi"];

        echo "Họ và tên : " . $hoten;
        echo "<br>";
        echo "Email : " . $email;
        echo "<br>";
        echo "Số điện thoại : " . $sdt;
        echo "<br>";
        echo "Địa chỉ : " . $diachi;
        ?>
    </div>
</body>

</html>