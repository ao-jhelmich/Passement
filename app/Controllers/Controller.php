<?php

namespace App\Controllers;

use BadMethodCallException;

class Controller
{
    /**
     * Call function
     *
     * @return void
     */
    public function __call($name, $arguments)
    {
        trigger_error("Class: ". get_class($this) ." doesnt have method: ". $name);
    }

    public function redirectWithError($route, $error)
    {
        session(['error' => $error]);
            
        return redirect($route);
    }
}