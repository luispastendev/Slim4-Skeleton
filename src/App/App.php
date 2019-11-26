<?php
// use \DI\Container;
// use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
// use Slim\Routing\RouteCollectorProxy;
// use Slim\Exception\NotFoundException;

require __DIR__ . '/../../vendor/autoload.php';


// Instantiate app
$container = new \DI\Container();
AppFactory::setContainer($container);
$app = AppFactory::create();
$container = $app->getContainer();

require __DIR__ . "/Configs.php";
require __DIR__ . "/Dependencies.php";
require __DIR__ . "/Routes.php";
require __DIR__ . "/Services.php";
require __DIR__ . "/Models.php";

$app->addErrorMiddleware(true, true, true);
$app->run();
