<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('DEVELOPMENT', true);
session_start();

$dispatcher = \FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    require_once dirname(__DIR__) . '/routes.php';
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        if(is_array($routeInfo[1])){
            $handler = $routeInfo[1][0];
            $needs_login = true;
        } else {
            $handler = $routeInfo[1];
            $needs_login = false;
        }

        if ($needs_login) {
            if (! \App\Services\Auth::isLoggedIn()) {
                return redirect('/login');
            }
        }

        $vars = $routeInfo[2];
        list( $class, $method ) = explode( '@', $handler, 2 );
        $class = "App\\Controllers\\" . $class;

        call_user_func_array([ new $class, $method ], $vars);
        break;
}