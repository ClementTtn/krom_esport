<?php

namespace App\Controller;

use App\Model\Actualites_competionModel;

class ControllerActualites_competition
{
    private $model;

    public function __construct()
    {
        $this->model = new Actualites_competionModel();
    }

    // Affiche un article.
    public function findOne(){
        $id = htmlspecialchars($_GET['id']);
        $article=$this->model->findOne($id);

        require('../App/View/getUnArticleCompetition.php');
    }

    // Affiche tous les articles.
    public function findListe(){
        $listeArticle_competition=$this->model->findAll();

        require('../App/View/getListeArticles_competition.php');
    }

}