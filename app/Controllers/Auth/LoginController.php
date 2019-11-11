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
     * @return redirect
     */
    public function logIn()
    {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!$password || !$email) {
            return $this->redirectWithError('auth.login', 'Please fill both inputs');
        }

        if (! Auth::checkEmail($email)) {
            return $this->redirectWithError('auth.login', 'Email isnt assocciated with an account, try creating an account');
        }

        if (! Auth::login($email, $password)) {
            return $this->redirectWithError('auth.login', 'Email isnt assocciated with an account, try creating an account');
        };    
        
        return redirect('/admin');
    }

    /**
     * Logout the user
     *
     * @return redirect
     */
    public function logout()
    {
        session(['auth_session' => null]);

        return redirect('/login');
    }
}