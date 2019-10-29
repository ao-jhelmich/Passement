<?php

namespace App\Controllers;

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

    public function redirectWithError($view, $error)
    {
        return view($view, ['error' => $error]);
    }
}