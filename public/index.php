<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Slim\Routing\RouteCollectorProxy;
use Slim\Views\PhpRenderer;
use App\config\bd;


require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);


$app->get('/', function (Request $request, Response $response, $args) {
    $renderer = new PhpRenderer(__DIR__ .'./../src/templates');
    return $renderer->render($response, "home.php", [
        'title' => 'Lista de articulos'
    ]);
});

$app->group('/api',function(RouteCollectorProxy $group){
    
    $group->get('/articulos', function (Request $request, Response $response, $args) {
        $db = new App\config\bd();
        $sql = "SELECT * FROM articles";
        $registros = $db->run($sql);
        if($registros->rowCount() > 0){
            $payload = json_encode($registros->fetchAll());
            $code = 200;
        }else{
            $payload = json_encode(["msg" => "No existen registros"]);
            $code = 202;
        }
        $response->getBody()->write($payload);
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus($code);
    });

});


$app->run();
