<?php namespace App\Models;

class ArticlesModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAllArticles(){
        $sql = "SELECT * FROM articles";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}