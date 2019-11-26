<?php namespace App\Controllers;

use App\Controllers\BaseController;
use Psr\Container\ContainerInterface;

class ArticlesController extends BaseController{

    public function getAll($request, $response, $args){
        $payload = $this->container->get('articles_service')->getAll();
        
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

}
