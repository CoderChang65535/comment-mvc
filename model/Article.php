<?php

namespace Model;
include "User.php";
use \Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="Article")
 **/
class Article
{

    /**
     * @var int $Aid
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Aid;
    public function getAid()
    {
        return $this->Aid;
    }
    public function setAid($Aid)
    {
        $this->Aid = $Aid;
    }

    /**
     * @var string $Title
     * @ORM\Column(type="string")
     */
    protected $Title;

    public function getTitle()
    {
        return $this->Title;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @var string $Content
     * @ORM\Column(type="string")
     */
    protected $Content;

    public function getContent()
    {
        return $this->Content;
    }

    public function setContent($Content)
    {
        $this->Content = $Content;
    }

    /**
     * @var
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="Uid", referencedColumnName="Uid")
     */
    protected $Uid;
    public function getUid()
    {
        return $this->Uid;
    }

    public function setUser($Uid)
    {
        $this->Uid = $Uid;
    }
}