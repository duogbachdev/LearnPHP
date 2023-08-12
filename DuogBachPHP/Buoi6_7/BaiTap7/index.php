<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuogBachDev</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    if (isset($_POST["sbm"])) {
        include_once("./Auth.php");
        $Auth = new Auth($_POST["email"], $_POST["password"]);
        if ($Auth->checkRequired() == "False") {
            $alert = "<div>Tài khoản không được để trống</div>";
        } else {
            if ($Auth->checkValidateAcc() == "error") {
                $alert = "<div>Tài khoản không hợp lệ</div>";
            } else {
                $alert = "<div>Tài khoản đăng nhập thành công</div>";
            }
        }
    }
    ?>
    <div id="root">
        <h3>Trang Login</h3>
        <div>
            <?php if (isset($alert)) {
                echo $alert;
            }
            ?>

            <form action="" method="post">
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit" name="sbm">Login</button>
            </form>
        </div>
    </div>
</body>

</html>