<?php

namespace App\Controllers;

use BadMethodCallException;

class Controller
{
    public function __call($name, $arguments)
    {
        trigger_error("Class: ". get_class($this) ." doesnt have method: ". $name);
    }
}