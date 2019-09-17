<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Show the login form
     *
     * @return blade
     */
    public function index()
    {
        Auth::login($email, $password);
    }
}