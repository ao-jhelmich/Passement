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

    /**
     * Redirect to the page with errors
     *
     * @param String $view
     * @param String $error
     * @return \App\Services\View
     */
    public function redirectWithError($view, $error)
    {
        return view($view, ['error' => $error]);
    }
}