<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và gọi hàm lưu dữ liệu vào CSDL
    $namecode = $_POST["code"];
    $name = $_POST["name"];

    $dateInput = $_POST['date'];
    $convertedDate = date('Y-m-d', strtotime($dateInput));

    $scoreCC = $_POST["scoreCC"];
    $scoreGK = $_POST["scoreGK"];
    $scoreCK = $_POST["scoreCK"];

    $sql = "INSERT INTO tbl_diem (MaSV, TenSV, NgaySinh, DiemChuyenCan, DiemGiuaKy, DiemCuoiKy)
            VALUES ('$namecode', '$name', '$convertedDate', '$scoreCC', $scoreGK, '$scoreCK')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Điều hướng đến trang danh sách sinh viên
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaiTap7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-uppercase text-center my-5">Thêm mới sinh viên</h1>
        <form action="./addnew.php" method="post">
            <div class="mb-3">
                <label for="exampleInputCode" class="form-label">Mã sinh viên</label>
                <input type="text" class="form-control" required name="code" id="exampleInputCode">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Tên sinh viên</label>
                <input type="text" class="form-control" required name="name" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputDate" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" required name="date" id="exampleInputDate">
            </div>
            <div class="mb-3">
                <label for="exampleInputScoreCC" class="form-label">Điểm chuyên cần</label>
                <input type="number" class="form-control" required name="scoreCC" id="exampleInputScoreCC" min="0" max="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputScoreGK" class="form-label">Điểm Giữa Kỳ</label>
                <input type="number" class="form-control" required name="scoreGK" id="exampleInputScoreGK" min="0" max="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputscoreCK" class="form-label">Điểm Kiểm Tra</label>
                <input type="number" class="form-control" required name="scoreCK" id="exampleInputscoreCK" min="0" max="10">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>