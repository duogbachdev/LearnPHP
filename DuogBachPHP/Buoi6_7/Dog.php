<?php
class Dog
{
    // Phạm vi truy xuất :  public, private, protected
    protected $name;


    // Hàm khởi tạo không đổi
    // function __construct()
    // {
    //     echo "Hàm khởi tạo";
    // }

    // Hàm khởi tạo có đổi
    function __construct($name)
    {
        $this->name = $name;
    }

    function __destruct()
    {
        echo "Hàm Hủy";
    }

    public function getName()
    {
        return $this->name;
    }
}
