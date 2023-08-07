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
        <h1>Đăng Nhập</h1>
        <form action="./display.php" method="post">
            <div class="form_username">
                <label for="">username : </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form_password">
                <label for="">password : </label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form_btn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>