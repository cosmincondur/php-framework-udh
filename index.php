<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// works when creating classes
spl_autoload_register(function (string $class_name) {
    require "src/" . str_replace("\\", "/", $class_name) . ".php";
});

// when the Router is created, the autoload function is loading Router.php
$router = new Framework\Router; // this is now : /src/Framework/Router.php

$router->add("/{controller}/{action}");
$router->add("/{controller}/{id}/{action}");
$router->add("/home/index", ["controller" => "home", "action" => "index"]);
$router->add("/products", ["controller" => "products", "action" => "index"]);
$router->add("/", ["controller" => "home", "action" => "index"]);

$params = $router->match($path);

if ($params === false) {
    echo "404 Not Found";
    exit;
}

$action = $params["action"];
$controller = "App\Controllers\\" . ucwords($params["controller"]);

$controller_object = new $controller;

$controller_object->$action();
