<?php
#collection routes
$routes = [
    'index' => 'main@index',
    'store' => 'main@store'
];

#action for failure
$action = 'index';

#verify action in query strings
if (isset($_GET['k'])) {
    #verify action existing in routes
    if (!key_exists($_GET['k'], $routes)) {
        $action = 'index';
    } else {
        $action = $_GET['k'];
    }
}

#treatment definition route
$parts = explode('@', $routes[$action]);
$controller = 'core\\controllers\\'  . ucfirst($parts[0]);
$method = $parts[1];

$path = new $controller();
$path->$method();
