<?php

if (! function_exists('session')) {
    /**
     * Get or set the specified session value.
     */
    function session($value = null, $default = null)
    {
        if (is_null($value)) {
            return $_SESSION;
        }
        
        
        if (is_array($value)) {
            $key = key($value);

            return $_SESSION[$key] = $value[$key];
        }

        return $_SESSION[$value] ?? $default;
    }
}

if (! function_exists('view')) {
    /**
     * Get the desired template and render
     */
    function view($view, $vars = [])
    {
        return print((new \App\Services\View)->render($view, $vars));
    }
}

if (! function_exists('redirect')) {
    /**
     * Get the desired template and render
     */
    function redirect($route)
    {
        return header("Location: {$route}");
    }
}