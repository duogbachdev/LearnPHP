<?php
class Validate
{
    protected $email;
    protected $password;

    protected function setEmail($email)
    {
        $this->email = $email;
    }

    protected function setPassword($password)
    {
        $this->password = $password;
    }

    public function checkRequired()
    {
        if ($this->email == "" || $this->password == "") {
            return "False";
        } else {
            return "True";
        }
    }
}
