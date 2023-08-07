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
        <form action="display.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th colspan="3">Đăng Ký</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FullName</td>
                        <td colspan="2">
                            <input type="text" id="fullname" name="fullname">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td colspan="2">
                            <input type="text" id="username" name="username">
                        </td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td colspan="2">
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập lại password</td>
                        <td colspan="2">
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td colspan="2">
                            <div class="radio">
                                <div class="radio_Nam">
                                    <input type="radio" id="nam" name="gender" value="male">
                                    <label for="male">Nam</label>
                                </div>
                                <div class="radio_Nu">
                                    <input type="radio" id="nu" name="gender" value="female">
                                    <label for="female">Nữ</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td colspan="2">
                            <input type="date" id="date" name="date">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td colspan="2">
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>avatar</td>
                        <td colspan="2">
                            <input type="file" id="imageUpload" name="imageUpload" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td>Sở thích</td>
                        <td colspan="2">
                            <div class="checkbox">
                                <div class="checkbox_XemPhim">
                                    <input type="checkbox" name="likeBrary" id="xemphim" value="xem phim">
                                    <label for="xemphim">Xem phim</label>
                                </div>
                                <div class="checkbox_TheThao">
                                    <input type="checkbox" name="likeBrary" id="thethao" value="the thao">
                                    <label for="thethao">Thể thao</label>
                                </div>
                                <div class="checkbox_Web">
                                    <input type="checkbox" name="likeBrary" id="" value="web">
                                    <label for="web">web</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="btn">
                                <button type="reset">Reset</button>
                                <button type="submit">Oke</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>