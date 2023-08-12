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
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <div class="main_products <?php if($i == 1) {
                echo "featured";}?>">
                <img src="./img/img<?php echo $i; ?>.jpg" alt="img1">
                <div>
                    <h4>Image 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, alias. Esse officia amet aperiam
                        consequuntur quae totam tempore fuga sapiente, est quos rem et corporis, culpa doloribus nam maiores
                        id?</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>