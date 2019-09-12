<?php

class User
{
    public $email;

    public function setEmail($setEmail)
    {
        // validasi
        if(!filter_var($setEmail, FILTER_VALIDATE_EMAIL))
        {
            return;
        }

        $this->email = $setEmail;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }
}

$user = new User;
$user->setEmail("saskia.norma@koding.sch.id");

echo $user->getEmail();