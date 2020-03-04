<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GetInfoRepository")
 */
class GetInfo
{
    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $name;
    private $username;

    public function getName($name){
        $this->name = $name;
        return $this->name;
    }

    public function getUsername($username){
        $this->username = $username;
        return $this->username;
    }

}


