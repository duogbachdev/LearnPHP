<?php
class Dog
{
    // Thuộc tính
    var $name;
    var $age;

    // Phương thức

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }

    function action()
    {
        return "Gau Gau";
    }

    function showInfor()
    {
        return $this->name . "<br/>" . $this->age . "<br/>";
    }
}

class Fox extends Dog
{
    // Ghi đè
    function action()
    {
        return "Hu Hu";
    }
    // Nạp chổng
    function actionAll()
    {
        // Gọi lại hàm action() ở trên
        $result = parent::action();
        return "Hu Hu" . $result;
    }
}

// $Fox = new Fox();
// $Fox = new $Fox();
// $Fox->setName("HaHa");
// $Fox->setAge(22);
// echo $Fox->showInfor();

// // Khởi tạo đối tượng
// $Dog = new Dog();
// $Dog->setName("DuogBachDev");
// $Dog->setAge(22);
// echo $Dog->showInfor();
