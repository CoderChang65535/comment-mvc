<?php

/**
 * Class IndexController
 */
include ROOT."/Model/Article.php";
class IndexController extends ControllerInterface
{

    public function InitTemplate()
    {
        $this->setTemplate('index', array(
            'title' => '首页',
            'mymenu' => array(),
        ));
    }

    public function InitOutput()
    {
        if(isset($_POST["title"]) && $_POST["title"]){
            $entityManager= $this->db;
            $article = new \Model\Article();
            $article->setTitle($_POST["title"]);
            $article->setContent($_POST["content"]);
            $article->setUser(1);
            $entityManager->persist($article);
            $entityManager->flush();
        }
    }

}
