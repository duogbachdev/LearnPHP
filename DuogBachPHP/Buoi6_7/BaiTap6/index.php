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
        <h1>Chương trình tính chu vi và bán kính hình tròn</h1>
        <form action="" method="post">
            <div>
                <label for="">Nhập bán kính</label>
                <input type="text" name="bk" id="">
            </div>
            <div>
                <select name="pt" id="">
                    <option value="cv">Tính Chu Vi</option>
                    <option value="dt">Tính Diện Tích</option>
                </select>
            </div>
            <button>Tính</button>
            <p>Kết quả : <span><?php include "circle.php"; ?></span></p>
        </form>
    </div>
</body>

</html>