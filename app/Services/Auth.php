<?php

namespace App\Services;

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

        if ($user->password == md5($password)) {
            session(['auth_session' => $user->getSessionToken()]);

            return true;
        }
    }

    public static function user()
    {
        $user = (new User_DAO)->findBySessionToken();

        return $user;
        // get the user from the authentication session
        // We suggest that there is a logged in user
    }

    public static function __callStatic($name, $arguments)
    {
        trigger_error("Class: ". self::class ." doesnt have static method: ". $name);        
    }
}