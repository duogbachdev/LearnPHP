<?php
class Circle
{
    var $banKinh;
    var $PI = 3.14;

    function setBanKinh($banKinh)
    {
        $this->banKinh = $banKinh;
    }

    function ketQua($pt)
    {
        return $pt == "cv" ? 2 * $this->PI * $this->banKinh :
            $this->PI * $this->banKinh * $this->banKinh;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $banKinh = $_POST["bk"];
    $tinhToan = $_POST["pt"];

    if (is_numeric($banKinh)) {
        $circle = new Circle();
        $circle->setBanKinh($banKinh);

        if ($tinhToan == "cv") {
            echo $circle->ketQua("cv");
        } elseif ($tinhToan == "dt") {
            echo $circle->ketQua("dt");
        } else {
            echo "Vui lòng chọn phép tính.";
        }
    } else {
        echo "Vui lòng nhập bán kính hợp lệ.";
    }
}
