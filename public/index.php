<?php
// use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Slim\Psr7\Response;
use App\config\bd;


require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/articulos', function (Request $request, Response $response, $args) {
    $db = new App\config\bd();
    $sql = "SELECT * FROM articles";
    $registros = $db->run($sql);
    return $registros;
});

$app->run();
