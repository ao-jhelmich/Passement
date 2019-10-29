<?php

namespace App\Models\User;

class User
{
    public $id;
    public $email;
    public $session_token;
    public $password;

    public function getSessionToken()
    {
        if (!$this->session_token) {
            $this->session_token = md5($this->id . $this->email);
        }
        
        return $this->session_token;
    }
}