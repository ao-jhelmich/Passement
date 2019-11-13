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
        return str_contains($_SERVER['REQUEST_URI'], $route);
    }
}