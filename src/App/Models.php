<?php 
use App\Models\ArticlesModel;
use Psr\Container\ContainerInterface;

$container->set('articles_model',function(ContainerInterface $container){
    return new ArticlesModel($container->get('db'));
});