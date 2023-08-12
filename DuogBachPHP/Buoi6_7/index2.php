<?php
// Gọi file từ bên ngoài
// include_once("./Dog.php");

spl_autoload_register(function ($a) {
    include_once($a . ".php");
});

$Dog = new Dog("Milu");
echo $Dog->name;
