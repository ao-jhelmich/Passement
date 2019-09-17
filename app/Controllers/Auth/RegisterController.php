<?php

namespace App\Controllers\Auth;

use Illuminate\Support\Facades\Request;

class RegisterController
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

        Auth::register($email, $password);
        
    }
}