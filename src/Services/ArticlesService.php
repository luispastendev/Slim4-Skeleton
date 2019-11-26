<?php namespace App\Services;

use App\Models\ArticlesModel;




class ArticlesService{

    // OBTENER TODOS LOS REGISTROS
    protected $articlesModel;

    public function __construct(ArticlesModel $model){
        $this->articlesModel = $model;
    }

    public function getAll(){
        return $this->articlesModel->getAllArticles();
    }

}