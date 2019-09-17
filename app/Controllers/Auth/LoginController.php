<?php

namespace App\Controllers\Auth;

use App\Services\Auth;
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
        return view('auth.login');
    }

    /**
     * Login the user
     *
     * @return \Illuminate\Http\Response
     */
    public function logIn()
    {
        // Auth::login($email, $password);        
    }
}