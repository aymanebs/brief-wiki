<?php


use app\routes\Router;

require_once __DIR__ . '/../../vendor/autoload.php';

$router = new Router();

$router->setRoutes([
    'GET' => [
        "register" => ["UserController", "viewRegister"],
        "catinsert" => ["CategoryController", "viewInsert"]
         
    ],

    'POST' => [
        'register'=>['UserController' , 'register'],
        'insert'=>['CategoryController' , 'insert']
      

    ]
]);

if (isset($_GET['url'])) {
    $uri = trim($_GET['url'], '/');
    $method = $_SERVER['REQUEST_METHOD'];

    try {
        $route = $router->getRoute($method, $uri);

        if ($route) {
            list($controllerName, $methodName) = $route;
            $controllerClass = 'app\\controllers\\' . ucfirst($controllerName);
            $controller = new $controllerClass();

            if ($methodName && method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                $controller->index();
            }
        } else {
            throw new Exception('Route not found.');
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}