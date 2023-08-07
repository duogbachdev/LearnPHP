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
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        echo "username : " . $username;
        echo "<br>";
        echo "password : " . $password;
        echo "<br>";
        ?>
    </div>
</body>

</html>