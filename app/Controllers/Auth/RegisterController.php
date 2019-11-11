<?php

namespace App\Controllers\Auth;

use App\Services\Auth;
use App\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function store()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (!$password || !$email || !$confirm_password) {
            return $this->redirectWithError('auth.register', 'Please fill all inputs');
        }

        if ($password != $confirm_password) {
            return $this->redirectWithError('auth.register', 'Passwords dont match');
        }

        Auth::register($email, $password);

        return redirect('/admin');
    }
}