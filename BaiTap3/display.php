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
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $date = $_POST["date"];
        $imageUpload = $_POST["imageUpload"];
        $likeBrary = $_POST["likeBrary"];

        echo "fullname : " . $fullname;
        echo "<br>";
        echo "username : " . $username;
        echo "<br>";
        echo "password : " . $password;
        echo "<br>";
        echo "gender : " . $gender;
        echo "<br>";
        echo "date : " . $date;
        echo "<br>";
        echo "imageUpload : " . $imageUpload;
        echo "<br>";
        echo "likeBrary : " . $likeBrary;
        echo "<br>";
        ?>
    </div>
</body>

</html>