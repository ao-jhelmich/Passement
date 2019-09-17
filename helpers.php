<?php

if (! function_exists('session')) {
    /**
     * Get or set the specified session value.
     */
    function session($key = null, $default = null)
    {
        if (is_null($key)) {
            return $_SESSION;
        }

        if (is_array($key)) {
            return $_SESSION[$key[0]] = $key[1];
        }

        return $_SESSION[$key] ?? $default;
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