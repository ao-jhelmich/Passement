<?php

namespace App\Services;

use Jenssegers\Blade\Blade;

class View
{
    protected $blade;

    public function __construct()
    {
        $this->blade = new Blade(dirname(__DIR__) . '/../resources/views/', dirname(__DIR__) . '/../resources/views/cache');
    }

    public function render($view, $vars = [])
    {
        return $this->blade->make($view, $vars)->render();
    }
}