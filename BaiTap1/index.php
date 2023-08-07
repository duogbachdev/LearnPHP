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
        <h1>Quản lý sinh viên</h1>
        <form action="./display.php" method="post">
            <div class="form_hoten">
                <label for="">Họ tên : </label>
                <input type="text" id="hoten" name="hoten">
            </div>
            <div class="form_email">
                <label for="">Email : </label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form_sdt">
                <label for="">Số điện thoại : </label>
                <input type="text" id="sdt" name="sdt">
            </div>
            <div class="form_diachi">
                <label for="">Địa chỉ : </label>
                <input type="text" id="diachi" name="diachi">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>