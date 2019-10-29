<?php

namespace App\Models\User;

class User
{
    protected $id;
    protected $email;
    protected $session_token;
    private $password;

    public function getEncodedPass()
    {
        return $this->password;
    }
}