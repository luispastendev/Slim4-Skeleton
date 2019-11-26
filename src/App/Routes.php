<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;


$app->group('/api',function(RouteCollectorProxy $group){
    $group->get('/','App\Controllers\ArticlesController:getAll');
});
