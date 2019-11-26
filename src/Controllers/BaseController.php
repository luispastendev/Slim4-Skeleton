<?php namespace App\Controllers;

use Psr\Container\ContainerInterface;
use App\Service\ArticlesService;

abstract class BaseController{

    protected $container;

    public function __construct(ContainerInterface $container){
        $this->container = $container;
    }

    protected function getArticlesService(){
        return $this->container->get('articles_service');
    }
}