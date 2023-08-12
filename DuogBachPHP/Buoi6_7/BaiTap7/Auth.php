<?php
include_once("./Validate.php");
class Auth extends Validate
{
    public function __construct($email, $password)
    {
        $this->setEmail($email);
        $this->setPassword($password);
    }
    public function checkValidateAcc()
    {
        if ($this->email == "duogbachdev@gmail.com" && $this->password == "22102003") {
            return "success";
        } else {
            return "error";
        }
    }
}
