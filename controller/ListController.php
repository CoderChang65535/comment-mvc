<?php

/**
 * Class ListController
 */
include ROOT."/Model/Article.php";
class ListController extends ControllerInterface
{


    public function InitTemplate()
    {
        $this->setTemplate('list', array(
            'title' => '列表页',
            'article' => $this->formatArticleInfo($this->queryArticle($this->db)),
        ));
    }
    public function queryArticle($db){
        $result = $db
            ->getRepository("Model\Article")
            ->findAll();
        //dump($result);
        //$result=$db->find("\Model\Article:Article","Aid");
        return $result;
    }
    public function formatArticleInfo($list){
        if ($list) {
            foreach ($list as $item) {
                $result[]="<td>".$item->getTitle()."</td>"
                    ."<td>".$item->getContent()."</td>";
            }
        }
        return $result;
    }
    public function InitOutput()
    {

    }

}
