<?php

namespace App\Services;

class Route 
{
    public function __construct()
    {
        // 
    }

    public static function is($route)
    {
        return $_SERVER['REQUEST_URI'] == $route;
    }
}