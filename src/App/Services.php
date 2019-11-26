<?php 

use App\Services\ArticlesService;
use Psr\Container\ContainerInterface;

$container->set('articles_service',function(ContainerInterface $container){
    return new ArticlesService($container->get('articles_model'));
});