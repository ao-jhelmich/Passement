<?php

if (! function_exists('session')) {
    /**
     * Get / set the specified session value.
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