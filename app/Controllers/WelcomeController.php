<?php

namespace App\Controllers;

class WelcomeController 
{
    public function index()
    {
        return print(view('welcome', ['name' => 'Jasper']));
    }
}