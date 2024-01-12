<?php


use app\routes\Router;

require_once __DIR__ . '/../../vendor/autoload.php';

$router = new Router();

$router->setRoutes([
    'GET' => [

        "register" => ["UserController", "viewRegister"],
        "login" => ["UserController", "viewLogin"],
        'logout'=>['UserController' , 'logout'],
        "catinsert" => ["CategoryController", "viewInsert"],
        "taginsert" => ["TagController", "viewInsert"],
        "wikinsert" => ["WikiController", "viewInsert"],




        // "index" => ["WikiController", "viewList"],

        "index" => ["WikiController", "index"],
        "search" => ["WikiController", "search"],





        "dashboard" => ["HomeController", "viewDashboard"],





        'deleteWiki'=>['WikiController' , 'delete'],
        'deleteUser'=>['UserController' , 'delete'],
        'deleteCategory'=>['CategoryController' , 'delete'],
        'deleteTag'=>['TagController' , 'delete'],

        'edit'=>['WikiController' , 'edit'],

        'edit-wiki'=>['WikiController' , 'edit'],
        
        
        "wikidetails" => ["WikiController", "listDetails"],

        "wikinsert" => ["WikiController", "selectList"],
        "wikidetails" => ["WikiController", "listDetails"],

        "dashboard" => ["WikiController", "listWikis"],

        "dashboard-users" =>['UserController' , "listUsers"],
        "dashboard-categories" =>['CategoryController' , "listCategories"],
        "dashboard-tags" =>['TagController' , "listTags"],

        "statistics" => ["StatisticsController", "count"],



       
        
        
        
        
        
         
    ],

    'POST' => [
        'register'=>['UserController' , 'register'],
        "login" => ["UserController", "login"],
        'insert'=>['CategoryController' , 'insert'],
        'insert'=>['TagController' , 'insert'],
        'insert'=>['WikiController' , 'insert'],

        'edit'=>['WikiController' , 'edit'],

        "editStatus" => ["WikiController", "editStatus"], ///
        "editTitle" => ["CategoryController", "editTitle"],
        "editTitle" => ["TagController", "editTitle"],
        "editRole" => ["UserController", "editRole"]

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