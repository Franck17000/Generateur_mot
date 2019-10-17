<?php
require_once('src/Router.php');

$request = new Src\Request();
$router = new Src\Router($request);

require_once('app/routes.php');

echo $router->render();