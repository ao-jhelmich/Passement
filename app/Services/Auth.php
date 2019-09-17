<?php

namespace App\Services;

class Auth
{
    /**
     * Check if there is a current authenticated session
     *
     * @return boolean
     */
    public static function check()
    {
        return false;
    }

    public static function login($email, $password)
    {
        // Check the password and email with the database
        // Get the session for the user
        // set the auth_session to a generated user token from db if this is 
        // older then 2 hours generate a new one 

        var_dump($email);
        var_dump($password);
    }

    public static function user()
    {
        // get the user from the authentication session
        // We suggest that there is a logged in user
    }

    public static function __callStatic($name, $arguments)
    {
        trigger_error("Class: ". get_class($this) ." doesnt have static method: ". $name);        
    }
}