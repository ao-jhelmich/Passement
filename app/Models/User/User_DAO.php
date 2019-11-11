<?php

namespace App\Models\User;

use App\Models\Base_DAO;

class User_DAO extends Base_DAO
{
    public function findByMail($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = :email";

        $params = [
            'email' => $email
        ];
        
        return $this->execute($sql, $params, \App\Models\User\User::class);
    }

    public function findBySessionToken()
    {
        $sql = "SELECT * FROM `users` WHERE `session_token` = :session_token";

        $params = [
            'session_token' => session('auth_session')
        ];
        
        return $this->execute($sql, $params, \App\Models\User\User::class);
    }

    public function create(User $user)
    {
        $sql = "INSERT INTO `users` (`email`, `password`, `session_token`)
                VALUES (:email, :password, :session_token)";

        $params = [
            'email' => $user->email,
            'session_token' => $user->getSessionToken(),
            'password' => $user->password,
        ];
        
        $this->execute($sql, $params);

        return $this->findByMail($user->email);
    }
}