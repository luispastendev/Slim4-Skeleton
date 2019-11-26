<?php

require __DIR__ . "./../src/App/App.php";

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Slim\Factory\AppFactory;
// use Slim\Exception\NotFoundException;
// use Slim\Routing\RouteCollectorProxy;
// use Slim\Views\PhpRenderer;
// use App\config\bd;
// use Respect\Validation\Validator as v;

// require __DIR__ . '/../vendor/autoload.php';

// $app = AppFactory::create();
// $app->addRoutingMiddleware();


// $app->get('/', function (Request $request, Response $response, $args) {
//     $renderer = new PhpRenderer(__DIR__ .'./../src/templates');
//     return $renderer->render($response, "home.php", [
//         'title' => 'Lista de articulos'
//     ]);
// });

// $app->group('/api',function(RouteCollectorProxy $group){
    
//     $group->get('/articulos', function (Request $request, Response $response, $args) {
//         $db = new App\config\bd();
//         $sql = "SELECT * FROM articles";
//         $registros = $db->run($sql);
//         if($registros->rowCount() > 0){
//             $payload = json_encode($registros->fetchAll());
//             $code = 200;
//         }else{
//             $payload = json_encode(["msg" => "No existen registros"]);
//             $code = 202;
//         }
//         $response->getBody()->write($payload);
//         return $response
//             ->withHeader('content-type', 'application/json')
//             ->withStatus($code);
//     });

//     $group->post('/articulo/create', function(Request $request, Response $response){
//         $data = $request->getParsedBody();
//         if(!v::length(2, 3)->validate($data['title'])){
//             throw new Exception('Invalid title.', 400);
//         }
//         $response->getBody()->write("hola mundo post");
//         return $response;
//     }); 

// });

// $customErrorHandler = function (
//     Request $request,
//     Throwable $exception,
//     bool $displayErrorDetails,
//     bool $logErrors,
//     bool $logErrorDetails
// ) use ($app) {
//     $payload = ['error' => $exception->getMessage()];

//     $response = $app->getResponseFactory()->createResponse();
//     $response->getBody()->write(
//         json_encode($payload, JSON_UNESCAPED_UNICODE)
//     );
//     return $response;
// };

// // Add Error Middleware
// $errorMiddleware = $app->addErrorMiddleware(true, true, true);
// $errorMiddleware->setDefaultErrorHandler($customErrorHandler);




