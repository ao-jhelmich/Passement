<?php

namespace App\Services;

use App\Models\User\User;
use App\Models\User\User_DAO;

class Auth
{
    /**
     * Check if there is a current authenticated session
     *
     * @return boolean
     */
    public static function isLoggedIn()
    {
        return !empty(session('auth_session'));
    }

    public static function checkEmail($email)
    {
        $email = (new User_DAO)->findByMail($email);
        
        return !empty($email);
    }

    public static function login($email, $password)
    {
        // Check the password and email with the database
        // Get the session for the user
        // set the auth_session to a generated user token from db if this is 
        // older then 2 hours generate a new one 
        $user = (new User_DAO)->findByMail($email);

        if (! $user) {
            return false;
        }

        if ($user->password != md5($password)) {
            return false;
        }

        return self::authenticate($user);
    }

    public static function register($email, $password)
    {
        $password = md5($password);

        $new_user = new User();
        $new_user->email = $email;
        $new_user->password = $password;
        
        $user = (new User_DAO)->create($new_user);

        self::authenticate($user);
    }

    public static function user()
    {
        $user = (new User_DAO)->findBySessionToken();

        return $user;
    }

    public static function authenticate($user)
    {
        session(['auth_session' => $user->getSessionToken()]);

        return true;
    }

    public static function __callStatic($name, $arguments)
    {
        trigger_error("Class: ". self::class ." doesnt have static method: ". $name);        
    }
}