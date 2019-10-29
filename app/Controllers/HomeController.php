<?php

namespace App\Controllers;

use App\Services\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('')
        var_dump(Auth::user());
        exit;
    }
}