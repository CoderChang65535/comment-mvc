<?php

namespace Model;
use \Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="User")
 **/
class User
{

    /**
     * @var int $Uid
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Uid;
    public function getUid()
    {
        return $this->Uid;
    }
    public function setUid($Uid)
    {
        $this->Uid = $Uid;
    }

    /**
     * @var string $Password
     * @ORM\Column(type="string")
     */
    protected $Password;

    public function getPassword()
    {
        return $this->Password;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

}